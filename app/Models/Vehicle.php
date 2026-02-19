<?php

class Vehicle extends BaseModel
{
    public function getAll()
    {
        $query = "SELECT * FROM vehicles ORDER BY id DESC";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM vehicles WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $vehicle = $result->fetch_assoc();
        $stmt->close();

        return $vehicle;
    }

    public function create(array $data)
    {
        $query = "INSERT INTO vehicles (car_name, car_type, car_description, seats, bags, transmission, car_price, car_image, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'available')";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "sssiisds",
            $data['car_name'],
            $data['car_type'],
            $data['car_description'],
            $data['seats'],
            $data['bags'],
            $data['transmission'],
            $data['car_price'],
            $data['car_image']
        );
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function update($id, array $data)
    {
        $query = "UPDATE vehicles SET car_name = ?, car_type = ?, car_description = ?, seats = ?, bags = ?, transmission = ?, car_price = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "sssiisdi",
            $data['car_name'],
            $data['car_type'],
            $data['car_description'],
            $data['seats'],
            $data['bags'],
            $data['transmission'],
            $data['car_price'],
            $id
        );
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM vehicles WHERE id = ?");
        $stmt->bind_param("i", $id);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function setStatus($id, $status)
    {
        $stmt = $this->conn->prepare("UPDATE vehicles SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function hasActiveBookings($vehicleId)
    {
        $stmt = $this->conn->prepare("SELECT id FROM bookings WHERE vehicle_id = ? AND status != 'cancelled'");
        $stmt->bind_param("i", $vehicleId);
        $stmt->execute();
        $result = $stmt->get_result();
        $hasBookings = $result->num_rows > 0;
        $stmt->close();

        return $hasBookings;
    }

    public function getAvailable($pickupDate = null, $dropoffDate = null)
    {
        if ($pickupDate && $dropoffDate) {
            $query = "
                SELECT * FROM vehicles v
                WHERE v.id NOT IN (
                    SELECT vehicle_id
                    FROM bookings
                    WHERE status IN ('pending', 'confirmed')
                    AND (
                        (booking_date <= ? AND return_date >= ?)
                        OR (booking_date <= ? AND return_date >= ?)
                        OR (booking_date >= ? AND return_date <= ?)
                    )
                )
            ";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssssss", $pickupDate, $pickupDate, $dropoffDate, $dropoffDate, $pickupDate, $dropoffDate);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();

            return $result;
        }

        return $this->getAll();
    }

    public function getAvailableVehicles($pickupDate = null, $dropoffDate = null)
    {
        return $this->getAvailable($pickupDate, $dropoffDate);
    }
}
