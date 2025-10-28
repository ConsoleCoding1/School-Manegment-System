<?php include("./header.php") ?>
<?php
    include("./config.php");
    if (isset($_REQUEST['submit'])) {
        $employee_name = $_REQUEST['employee-name'];
        $employee_address = $_REQUEST['employee-address'];
        $employee_qualification = $_REQUEST['employee-qualification'];
        $employee_designation = $_REQUEST['employee-designation'];
        $employee_salary = $_REQUEST['employee-salary'];
        $stmt = $conn->prepare("INSERT INTO employee_manegment (`id`, `employee_name`, `employee_address`, `employee_qualification`, `employee_designation`, `employee_salary`) VALUES (NULL, '$employee_name', '$employee_address', '$employee_qualification', '$employee_designation', '$employee_salary')");
        $result = $stmt->execute();
    } 

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl">
        <h1 class="text-xl mb-5">Welcome To Employee Management System</h1>
        <div>
            <label for="employee-name" class="block mb-2">Employee Name:</label>
            <input type="text" id="employee_name" name="employee-name" class="border-3 border-red-500 p-2 rounded w-96" required>
        </div>
        <div class="mt-4">
            <label for="employee-address" class="block mb-2">Employee Address:</label>
            <input type="text" id="employee_address" name="employee-address" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="employee-qualification" class="block mb-2">Employee Qualification:</label>
            <input type="text" id="employee_qualification" name="employee-qualification" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="employee-designation" class="block mb-2">Employee Designation:</label>
            <input type="text" id="employee_designation" name="employee-designation" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="employee-salary" class="block mb-2">Employee Salary:</label>
            <input type="number" id="employee_salary" name="employee-salary" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up Employees</button>
    </form>
</main>
<?php include("./footer.php") ?>