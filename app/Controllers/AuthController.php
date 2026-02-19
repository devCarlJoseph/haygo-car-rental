<?php

class AuthController
{
    private $adminModel;
    private $uploader;

    public function __construct()
    {
        $this->adminModel = new Admin();
        $this->uploader = new FileUploader();
    }

    public function login(array $post)
    {
        $username = trim($post['l-username'] ?? '');
        $password = $post['l-password'] ?? '';

        if ($username === '' || $password === '') {
            return ['ok' => false, 'message' => 'Missing credentials'];
        }

        $admin = $this->adminModel->login($username, $password);
        if (!$admin) {
            return ['ok' => false, 'message' => 'Invalid username or password'];
        }

        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['admin_username'];
        $_SESSION['admin_profile'] = $admin['admin_profile'];

        return ['ok' => true];
    }

    public function signUp(array $post, array $files)
    {
        $username = trim($post['username'] ?? '');
        $password = $post['password'] ?? '';
        $adminKey = $post['adminkey'] ?? '';
        $expectedKey = "T0NY0_4DM1N_K3Y";

        if ($adminKey !== $expectedKey) {
            return ['ok' => false, 'redirect' => '../index.php'];
        }

        if ($username === '' || $password === '') {
            return ['ok' => false, 'message' => 'Username and password are required'];
        }

        if ($this->adminModel->usernameExists($username)) {
            return ['ok' => false, 'message' => 'Username already in use'];
        }

        $profileImage = $this->uploader->upload($files['admin_profile'] ?? [], __DIR__ . '/../../uploads/admin');
        if ($profileImage === null) {
            return ['ok' => false, 'message' => 'Failed to upload profile image'];
        }

        $created = $this->adminModel->create($username, password_hash($password, PASSWORD_DEFAULT), $profileImage);
        return ['ok' => $created, 'redirect' => '../admin/log_in.php'];
    }

    public function resetPassword(array $post)
    {
        $username = trim($post['forgot_username'] ?? '');
        $newPassword = $post['forgot_password'] ?? '';

        if ($username === '' || $newPassword === '') {
            return ['ok' => false, 'message' => 'Please fill in all fields'];
        }

        $updated = $this->adminModel->resetPassword($username, password_hash($newPassword, PASSWORD_DEFAULT));
        if (!$updated) {
            return ['ok' => false, 'message' => 'Username not found'];
        }

        return ['ok' => true];
    }
}
