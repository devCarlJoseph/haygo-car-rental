<?php

class Customer extends BaseModel
{
    public function findByEmailAndPhone($email, $phone)
    {
        $normalizedPhone = preg_replace('/\D+/', '', $phone);
        $query = "SELECT id, customer_name, email, phone, date_of_birth
                  FROM customers
                  WHERE email = ?
                  AND REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(phone, '-', ''), ' ', ''), '(', ''), ')', ''), '+', '') = ?
                  LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $email, $normalizedPhone);
        $stmt->execute();
        $result = $stmt->get_result();
        $customer = $result->fetch_assoc();
        $stmt->close();

        return $customer ?: null;
    }

    public function upsertByEmail(array $data)
    {
        $query = "INSERT INTO customers (customer_name, email, phone, date_of_birth) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE customer_name = VALUES(customer_name), phone = VALUES(phone), date_of_birth = VALUES(date_of_birth)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $data['customer_name'], $data['email'], $data['phone'], $data['date_of_birth']);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function update($id, array $data)
    {
        $query = "UPDATE customers SET customer_name = ?, email = ?, phone = ?, date_of_birth = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssi", $data['customer_name'], $data['email'], $data['phone'], $data['date_of_birth'], $id);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM customers WHERE id = ?");
        $stmt->bind_param("i", $id);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }
}
