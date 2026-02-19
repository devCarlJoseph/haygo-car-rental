<?php

class FileUploader
{
    public function upload(array $file, $targetDir)
    {
        if (empty($file['name']) || empty($file['tmp_name'])) {
            return null;
        }

        if (!is_dir($targetDir) && !mkdir($targetDir, 0755, true)) {
            return null;
        }

        $filename = basename($file['name']);
        $destination = rtrim($targetDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $filename;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            return null;
        }

        return $filename;
    }
}
