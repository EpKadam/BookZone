<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Connect to Database (Update with your credentials)
    $conn = new mysqli("localhost", "root", "", "bookstore");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert Order into Database
    $sql = "INSERT INTO orders (product, price, name, email, address) VALUES ('$product', '$price', '$name', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
