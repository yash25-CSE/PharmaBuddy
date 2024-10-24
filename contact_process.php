<?php
$servername = "localhost";
$username = "root";  // Change as per your database configuration
$password = "";      // Change as per your database configuration
$dbname = "cms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $medicine = $_POST['medicine'];
    $message = $_POST['message'];

    // Check if the email exists in the user_registration table
    $sql_check_email = "SELECT email FROM user_registration WHERE email = '$email'";
    $result = $conn->query($sql_check_email);

    if ($result->num_rows > 0) {
        // Insert data into contact table
        $sql = "INSERT INTO contact (name, phone, email, medicine, message) VALUES ('$name', '$phone', '$email', '$medicine', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Message sent successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Email not found in user registration.";
    }
}

$conn->close();
?>
