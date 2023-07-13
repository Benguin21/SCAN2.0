<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'scanawareness@gmail.com';

// Set the email subject
$subject = 'New Contact Form Submission';

// Build the email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Message:\n$message";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo "Thank you for your message. We will get in touch with you soon!";
} else {
  echo "Oops! Something went wrong. Please try again.";
}
?>

