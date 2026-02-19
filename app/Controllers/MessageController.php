<?php

class MessageController
{
    private $messageModel;

    public function __construct()
    {
        $this->messageModel = new Message();
    }

    public function create(array $post)
    {
        $data = [
            'fullname' => $post['fullname'] ?? '',
            'contact_num' => $post['phone_num'] ?? '',
            'inquiry' => $post['message'] ?? '',
        ];

        return $this->messageModel->create($data);
    }

    public function delete($id)
    {
        return $this->messageModel->delete((int) $id);
    }
}
