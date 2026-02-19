<?php

class Message extends BaseModel
{
    public function create(array $data)
    {
        $stmt = $this->conn->prepare("INSERT INTO messages (fullname, contact_num, inquiry) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['fullname'], $data['contact_num'], $data['inquiry']);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM messages WHERE id = ?");
        $stmt->bind_param("i", $id);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }
}
