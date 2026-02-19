<?php

class Blog extends BaseModel
{
    public function create(array $data)
    {
        $stmt = $this->conn->prepare("INSERT INTO blog (blog_title, blog_category, content_snipp, blog_image, author_name) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['blog_title'], $data['blog_category'], $data['content_snipp'], $data['blog_image'], $data['author_name']);
        $ok = $stmt->execute();
        $stmt->close();

        return $ok;
    }
}
