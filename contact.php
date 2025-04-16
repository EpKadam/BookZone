<?php
$servername = "localhost"; // Change this to your server name if necessary
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "bookstore"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    // Prepare the SQL query
    $sql = "INSERT INTO contact_messages (first_name, last_name, country, subject) 
            VALUES ('$first_name', '$last_name', '$country', '$subject')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Your message has been successfully submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
