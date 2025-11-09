<?php

require_once '../config/config.php';

if (isset($_POST['add_blog'])) {
    $title = $_POST['blog_title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $author_name = $_POST['author'];

    $blog_image = $_FILES['blog_img']['name'];
    $tmp_name = $_FILES['blog_img']['tmp_name'];

    $blog_image_dir = "../uploads/blogs/";
    $blog_dest = $blog_image_dir . $blog_image;

    move_uploaded_file($tmp_name, $blog_dest);

    $query = "INSERT INTO blog (blog_title, blog_category, content_snipp, blog_image, author_name) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("sssss", $title, $category, $content, $blog_image, $author_name);

    if ($stmt->execute()) {
        header("Location: ../blog.php");
    }

    $stmt->close();
    $conn->close();
}
