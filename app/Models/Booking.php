<?php

class Booking extends BaseModel
{
    public function create(array $data)
    {
        $query = "INSERT INTO bookings (customer_name, email, phone_num, lic_id, vehicle_id, date_of_birth, booking_date, return_date, total_price, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "ssssisssds",
            $data['customer_name'],
            $data['email'],
            $data['phone_num'],
            $data['lic_id'],
            $data['vehicle_id'],
            $data['date_of_birth'],
            $data['booking_date'],
            $data['return_date'],
            $data['total_price'],
            $data['status']
        );
        $stmt->execute();
        $id = $this->conn->insert_id;
        $stmt->close();

        return $id;
    }

    public function updateStatus($bookingId, $status)
    {
        $stmt = $this->conn->prepare("UPDATE bookings SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $bookingId);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function getById($bookingId)
    {
        $stmt = $this->conn->prepare("SELECT * FROM bookings WHERE id = ?");
        $stmt->bind_param("i", $bookingId);
        $stmt->execute();
        $result = $stmt->get_result();
        $booking = $result->fetch_assoc();
        $stmt->close();

        return $booking ?: null;
    }

    public function getByEmail($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM bookings WHERE email = ? ORDER BY id DESC");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $rows;
    }

    public function getVehicleId($bookingId)
    {
        $stmt = $this->conn->prepare("SELECT vehicle_id FROM bookings WHERE id = ?");
        $stmt->bind_param("i", $bookingId);
        $stmt->execute();
        $stmt->bind_result($vehicleId);
        $stmt->fetch();
        $stmt->close();

        return $vehicleId ?: null;
    }

    public function delete($bookingId)
    {
        $stmt = $this->conn->prepare("DELETE FROM bookings WHERE id = ?");
        $stmt->bind_param("i", $bookingId);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }
}
