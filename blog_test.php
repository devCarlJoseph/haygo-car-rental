<?php
// 1. Include the database connection script
include 'connection.php';

// 2. Process form submission
if (isset($_POST['submit'])) {
    // Check if a file was selected
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        
        // Get file details
        $fileName = $_FILES['image']['name'];
        $tempName = $_FILES['image']['tmp_name'];
        
        // Define the target folder path (must exist: 'images/' folder)
        $folder = "images/" . $fileName;

        // SQL Query to insert the file name into the database
        $query = "INSERT INTO images (file) VALUES ('$fileName')";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Move the uploaded file from the temporary location to the target folder
            if (move_uploaded_file($tempName, $folder)) {
                $message = "File uploaded successfully and saved to DB!";
                $messageClass = "text-green-600";
            } else {
                $message = "Error uploading file to folder.";
                $messageClass = "text-red-600";
            }
        } else {
            $message = "Error inserting file name into database: " . mysqli_error($conn);
            $messageClass = "text-red-600";
        }
    } else {
        $message = "Please select an image file to upload.";
        $messageClass = "text-yellow-600";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Image Upload and Display</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px; }
        form { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 4px; }
        input[type="file"] { border: 1px solid #ccc; padding: 8px; border-radius: 4px; }
        input[type="submit"] { background-color: #5cb85c; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #4cae4c; }
        .image-gallery { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px; }
        .image-gallery img { max-width: 100%; height: auto; width: 150px; border: 1px solid #ddd; padding: 5px; background: #fff; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); }
        .message { padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .text-green-600 { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .text-red-600 { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .text-yellow-600 { background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Image</h1>

        <?php if (isset($message)): ?>
            <div class="message <?php echo $messageClass; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <!-- HTML Form for Image Upload -->
        <form method="post" enctype="multipart/form-data">
            <label for="image">Choose Image:</label>
            <!-- The name attribute 'image' is critical for $_FILES['image'] -->
            <input type="file" name="image" id="image" required>
            <input type="submit" name="submit" value="Upload & Save">
        </form>

        <h1>Stored Images</h1>
        
        <div class="image-gallery">
            <?php
            // 3. Display Images from Database
            
            // Query to fetch all records from the images table
            $result = mysqli_query($conn, "SELECT * FROM images");
            
            if (mysqli_num_rows($result) > 0) {
                // Loop through all fetched rows
                while ($row = mysqli_fetch_assoc($result)) {
                    // Display the image using the file name stored in the 'file' column
                    // The path is 'images/' which corresponds to the physical folder where files are stored
                    echo '<img src="images/' . $row['file'] . '" alt="Uploaded Image">';
                }
            } else {
                echo '<p>No images found in the database.</p>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>