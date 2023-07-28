<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$website = $_POST["website"];
$message = $_POST["message"];

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "maroinealarabi@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nwebsite: $website";
        $sender = "From: $email";
        if (mail($receiver, $subject, $body, $sender)) {
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send your message";
        }
    } else {
        echo "Enter a valid email adrress!";
    }
} else {
    echo "Email and message fields are required!";
}
