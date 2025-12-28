<?php
include "../config.php";

// Read raw JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);
$employee_name = $data['employee_name'];
$employee_address = $data['employee_address'];
$employee_qualification = $data['employee_qualification'];
$employee_designation = $data['employee_designation'];
$employee_salary = $data['employee_salary'];

// Select Data From Databace
$sql = $conn->prepare("INSERT INTO employee_manegment (`id`, `employee_name`, `employee_address`, `employee_qualification`, `employee_designation`, `employee_salary`) VALUES (NULL, '$employee_name', '$employee_address', '$employee_qualification', '$employee_designation', '$employee_salary')");
$sql->execute();

echo json_encode([
    "message" => "Employee inserted successfully"
]);
