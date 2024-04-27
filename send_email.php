<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Validate email address
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Send email
    $to = $email;
    $subject = "Test Email";
    $message = "This is a test email sent from PHP.";
    $headers = "From: your_email@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully to $email";
    } else {
        echo "Failed to send email";
    }
}
?>
