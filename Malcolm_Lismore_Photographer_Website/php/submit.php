<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $eventType = htmlspecialchars($_POST['event-type']);
    $eventDate = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Send email (optional)
    $to = "malcolm@example.com"; // Malcolm's email address
    $subject = "New Enquiry from $name";
    $body = "Event Type: $eventType\nEvent Date: $eventDate\nMessage: $message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    echo "Thank you for your enquiry, $name. We'll be in touch soon.";
}
?>
