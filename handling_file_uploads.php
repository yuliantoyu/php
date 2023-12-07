<?php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if file upload is successful
    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        // Set the destination directory
        $uploadDir = 'uploads/';
        
        // Generate a unique filename
        $uploadedFileName = uniqid('file_', true) . '_' . basename($_FILES['uploadedFile']['name']);
        
        // Combine directory and filename
        $uploadPath = $uploadDir . $uploadedFileName;

        // Move the uploaded file to the destination
        if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $uploadPath)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "File upload error.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label for="uploadedFile">Choose a file to upload:</label>
    <input type="file" id="uploadedFile" name="uploadedFile" required>
    <input type="submit" value="Upload">
</form>

</body>
</html>
