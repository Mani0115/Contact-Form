<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $phone    = htmlspecialchars($_POST['phone']);
    $email    = htmlspecialchars($_POST['email']);
    $service  = htmlspecialchars($_POST['service']);
    $message  = htmlspecialchars($_POST['message']);

    $to = "myni@gmail.com";  // <-- Change to your actual email
    $subject = "New Inquiry from Website";

    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Service: $service\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Mail sending failed. Please try again.";
    }
} else {
    echo "Something went wrong.";
}
?>
