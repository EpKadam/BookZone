<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bookweb";

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product details from the form
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];

    // Insert purchase details into the database
    $sql = "INSERT INTO purchases (product_id, price, purchase_date) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("id", $product_id, $price);

    if ($stmt->execute()) {
        echo "Purchase successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
