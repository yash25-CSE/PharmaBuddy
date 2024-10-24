<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Database connection
$connection = mysqli_connect("localhost", "root", "", "cms");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send_btn'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $message = $_POST['message'];
    $sex = $_POST['sex'];

    // Insert the data into the database
    $query = "INSERT INTO user_registration (`name`, `age`, `email`, `phone`, `password`, `message`, `sex`) 
              VALUES ('$name', $age, '$email', '$phone', '$password', '$message', '$sex')";
    
    if (mysqli_query($connection, $query)) {
        // Send Thank You Email
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'yuvrajsahejwani@gmail.com'; // Replace with your email
            $mail->Password = 'YUVRAJ@25052005'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('your_email@example.com', 'Your Name');
            $mail->addAddress($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Thank You for Registering!';
            $mail->Body = 'Dear ' . $name . ',<br><br>Thank you for registering with us!<br><br>Best Regards,<br>Your Company Name';

            $mail->send();
            echo "<script>alert('Inserted record successfully and thank you email sent');window.location.href='index.html';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Inserted record successfully but email could not be sent. Mailer Error: {$mail->ErrorInfo}');window.location.href='index.html';</script>";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
