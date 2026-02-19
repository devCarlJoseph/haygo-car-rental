<?php

class VehicleController
{
    private $vehicleModel;
    private $uploader;

    public function __construct()
    {
        $this->vehicleModel = new Vehicle();
        $this->uploader = new FileUploader();
    }

    public function create(array $post, array $files)
    {
        $carImage = $this->uploader->upload($files['car_image'] ?? [], __DIR__ . '/../../uploads/vehicles');
        if ($carImage === null) {
            return false;
        }

        $data = [
            'car_name' => $post['car_name'] ?? '',
            'car_type' => $post['car_type'] ?? '',
            'car_description' => $post['car_description'] ?? '',
            'seats' => (int) ($post['seats'] ?? 0),
            'bags' => (int) ($post['bags'] ?? 0),
            'transmission' => $post['transmission'] ?? '',
            'car_price' => (float) ($post['car_price'] ?? 0),
            'car_image' => $carImage,
        ];

        return $this->vehicleModel->create($data);
    }

    public function update(array $post)
    {
        $id = (int) ($post['id'] ?? 0);
        $data = [
            'car_name' => $post['car_name'] ?? '',
            'car_type' => $post['car_type'] ?? '',
            'car_description' => $post['car_description'] ?? '',
            'seats' => (int) ($post['seats'] ?? 0),
            'bags' => (int) ($post['bags'] ?? 0),
            'transmission' => $post['transmission'] ?? '',
            'car_price' => (float) ($post['car_price'] ?? 0),
        ];

        return $this->vehicleModel->update($id, $data);
    }

    public function delete($id)
    {
        $vehicleId = (int) $id;
        if ($this->vehicleModel->hasActiveBookings($vehicleId)) {
            return ['ok' => false, 'message' => 'You cannot delete this vehicle because it is linked to bookings.'];
        }

        $vehicle = $this->vehicleModel->getById($vehicleId);
        if ($vehicle && !empty($vehicle['car_image'])) {
            $path = __DIR__ . '/../../uploads/vehicles/' . $vehicle['car_image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        return ['ok' => $this->vehicleModel->delete($vehicleId)];
    }
}
