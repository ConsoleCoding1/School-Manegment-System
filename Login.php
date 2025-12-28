<?php
include "./config.php";

// Read raw JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);
$email = $data['email'];
$password = $data['password'];

// Select Data From Databace
$query = "SELECT * FROM `user_management` WHERE user_name = '$email'";
$sql = $conn->prepare($query);
$sql->execute();
$result = $sql->fetch();

if ($result) {
    $user_password = $result['user_password'];
    if ($password == $user_password) {
        echo json_encode([
            "status" => true,
            "message" => 'Login Success',
        ]);
    } else {
        echo json_encode([
            'status' => false,
            'message' => 'Your id password is incorrect',
        ]);
    }
} else {
    echo json_encode([
        'status' => false,
        'message' => 'Your id password is incorrect',
    ]);
}
