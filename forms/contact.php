<?php
// Set your email
$receiving_email_address = "isan.adh123@gmail.com";

// Get form fields
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$subject = isset($_POST['subject']) ? strip_tags($_POST['subject']) : 'Website Contact Form';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all required fields.";
    exit;
}

// Email content
$email_subject = "New message from: $name";
$email_body = "You have received a new message from your website contact form.\n\n"
            . "Name: $name\n"
            . "Email: $email\n"
            . "Subject: $subject\n\n"
            . "Message:\n$message";

// Headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
    echo "Your message has been sent. Thank you!";
} else {
    echo "Sorry, something went wrong. Please try again later.";
}
?>
