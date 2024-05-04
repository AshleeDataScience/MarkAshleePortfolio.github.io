<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send email
    $to = "markmori74@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error: Unable to send email. Please try again later.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
