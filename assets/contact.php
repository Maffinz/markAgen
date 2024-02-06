<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "williyaaj@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $email";

    // Compose the email message
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n\n";
    $emailMessage .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $emailMessage, $headers);

    // You can redirect the user to a thank you page or display a success message
    header("Location: thank-you.html");
    exit();
}
?>
