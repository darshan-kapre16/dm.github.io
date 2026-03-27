<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('config/db.php');
require_once('config/mail.php');

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$country = $_POST['country'] ?? '';
$message = $_POST['message'] ?? '';

$stmt = $conn->prepare("INSERT INTO inquiries (name,email,country,message,status) VALUES (?,?,?,?, 'new')");
$stmt->bind_param("ssss", $name, $email, $country, $message);
$stmt->execute();

// optional email
if(function_exists('sendMail')){
    sendMail($email, $name);
}

header("Location: index.php?success=1");
exit;