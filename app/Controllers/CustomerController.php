<?php

class CustomerController
{
    private $customerModel;

    public function __construct()
    {
        $this->customerModel = new Customer();
    }

    public function update(array $post)
    {
        $id = (int) ($post['id'] ?? 0);
        $data = [
            'customer_name' => $post['customer_name'] ?? '',
            'email' => $post['email'] ?? '',
            'phone' => $post['phone'] ?? '',
            'date_of_birth' => $post['date_of_birth'] ?? '',
        ];

        return $this->customerModel->update($id, $data);
    }

    public function delete($id)
    {
        return $this->customerModel->delete((int) $id);
    }
}
