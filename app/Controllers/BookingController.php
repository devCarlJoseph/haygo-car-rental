<?php

class BookingController
{
    private $bookingModel;
    private $vehicleModel;
    private $customerModel;

    public function __construct()
    {
        $this->bookingModel = new Booking();
        $this->vehicleModel = new Vehicle();
        $this->customerModel = new Customer();
    }

    public function create(array $post)
    {
        $data = [
            'customer_name' => $post['fullname'] ?? '',
            'email' => $post['email'] ?? '',
            'phone_num' => $post['phone_num'] ?? '',
            'lic_id' => $post['lic_id'] ?? '',
            'vehicle_id' => (int) ($post['vehicle_id'] ?? 0),
            'date_of_birth' => $post['birth'] ?? '',
            'booking_date' => $post['pick_up'] ?? '',
            'return_date' => $post['drop_off'] ?? '',
            'total_price' => (float) ($post['total_price'] ?? 0),
            'status' => 'pending',
        ];

        $bookingId = $this->bookingModel->create($data);
        $this->vehicleModel->setStatus($data['vehicle_id'], 'unavailable');
        $this->customerModel->upsertByEmail([
            'customer_name' => $data['customer_name'],
            'email' => $data['email'],
            'phone' => $data['phone_num'],
            'date_of_birth' => $data['date_of_birth'],
        ]);

        return $bookingId;
    }

    public function updateStatus(array $post)
    {
        $bookingId = (int) ($post['booking_id'] ?? 0);
        $status = $post['submit_status'] ?? '';

        $updated = $this->bookingModel->updateStatus($bookingId, $status);
        if (!$updated) {
            return false;
        }

        $vehicleId = $this->bookingModel->getVehicleId($bookingId);
        if ($vehicleId && in_array($status, ['cancelled', 'completed'], true)) {
            $this->vehicleModel->setStatus($vehicleId, 'available');
        }

        return true;
    }

    public function delete($id)
    {
        return $this->bookingModel->delete((int) $id);
    }
}
