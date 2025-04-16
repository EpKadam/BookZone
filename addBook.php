<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $bookTitle = $_POST['bookTitle'];
    $bookAuthor = $_POST['bookAuthor'];
    $bookGenre = $_POST['bookGenre'];
    $bookDescription = $_POST['bookDescription'];

    // Handle image upload
    $imageName = $_FILES['bookImage']['name'];
    $imageTmpName = $_FILES['bookImage']['tmp_name'];
    $imageError = $_FILES['bookImage']['error'];
    $imageSize = $_FILES['bookImage']['size'];

    // Define a directory to upload images
    $uploadDir = 'uploads/';
    $imagePath = $uploadDir . basename($imageName);

    // Check if image upload is successful and the image is valid
    if ($imageError === 0) {
        // Move the uploaded image to the server's upload directory
        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // Insert the data into the database including the image path
            $sql = "INSERT INTO books (title, author, genre, description, image_path)
                    VALUES ('$bookTitle', '$bookAuthor', '$bookGenre', '$bookDescription', '$imagePath')";

            if ($conn->query($sql) === TRUE) {
                echo "New book added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image!";
        }
    } else {
        echo "There was an error uploading your image!";
    }
}

// Close connection
$conn->close();
?>
