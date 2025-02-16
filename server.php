<?php
session_start();
header('Content-Type: application/json');

// Simulated users
$users = [
    "admin" => "admin123",
    "user1" => "password1"
];

$data = json_decode(file_get_contents("php://input"), true);
$username = $data["username"];
$password = $data["password"];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION["user"] = $username;
    echo json_encode(["status" => "success", "message" => "Login successful"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid login"]);
}
?>
