<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $myemail = pranav17502@gmail.com
    $subject = 'Your form is received.';
    $headers = "From: $myemail\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email template
    $email_message = "Hello $name,\n\n";
    $email_message .= "We have received your form submission:\n\n";
    $email_message .= "Message:\n$message\n\n";
    $email_message .= "Best regards,\nPranav Chaudhari";

    // Send the email
    if (mail($email, $subject, $email_message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
