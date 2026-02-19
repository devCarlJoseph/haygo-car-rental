<?php

class Admin extends BaseModel
{
    public function login($username, $password)
    {
        $stmt = $this->conn->prepare('SELECT id, admin_username, admin_pwd, admin_profile FROM haygo_admins WHERE admin_username = ?');
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();
        $stmt->close();

        if (!$admin) {
            return null;
        }

        return password_verify($password, $admin['admin_pwd']) ? $admin : null;
    }

    public function usernameExists($username)
    {
        $stmt = $this->conn->prepare('SELECT id FROM haygo_admins WHERE admin_username = ?');
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $exists = $stmt->num_rows > 0;
        $stmt->close();

        return $exists;
    }

    public function create($username, $passwordHash, $profileImage)
    {
        $stmt = $this->conn->prepare('INSERT INTO haygo_admins (admin_username, admin_pwd, admin_profile) VALUES (?, ?, ?)');
        $stmt->bind_param("sss", $username, $passwordHash, $profileImage);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }

    public function resetPassword($username, $passwordHash)
    {
        $stmt = $this->conn->prepare('UPDATE haygo_admins SET admin_pwd = ? WHERE admin_username = ?');
        $stmt->bind_param("ss", $passwordHash, $username);
        $stmt->execute();
        $affected = $stmt->affected_rows;
        $stmt->close();

        return $affected > 0;
    }
}
