<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "foreverforwardpod@gmail.com";
    $subject = "New Contact Form Submission";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Message: $message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $emailMessage, $headers)) {
        $response["status"] = "success";
        $response["message"] = "Message sent successfully.";
    } else {
        $response["status"] = "error";
        $response["message"] = "Failed to send message.";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Invalid request.";
}

echo json_encode($response);
?>
