<?php include("./header.php") ?>
<?php
include("./config.php");
$errorEmployeeName = NULL;
$errorEmployeeAddress = NULL;
$errorEmployeeQualification = NULL;
$errorEmployeeDesignation = NULL;
$errorEmployeeSalary = NULL;
$errorCount = 0;
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST["employee-name"] == '') {
        $errorEmployeeName = "Please fill this employee Name";
        $errorCount++;
    }
    if ($_REQUEST["employee-address"] == '') {
        $errorEmployeeAddress = "Please fill this Employee Address";
        $errorCount++;
    }
    if ($_REQUEST["employee-qualification"]  == '') {
        $errorEmployeeQualification = "Please fill this Employee Qualification";
        $errorCount++;
    }
    if ($_REQUEST["employee-designation"] == '') {
        $errorEmployeeDesignation = "Please fill this Employee Designation";
        $errorCount++;
    }
    if ($_REQUEST["employee-salary"] == '') {
        $errorEmployeeSalary = "Please fill this Employee Salary";
        $errorCount++;
    }
    if ($errorCount == 0) {

        $employee_name = $_REQUEST['employee-name'];
        $employee_address = $_REQUEST['employee-address'];
        $employee_qualification = $_REQUEST['employee-qualification'];
        $employee_designation = $_REQUEST['employee-designation'];
        $employee_salary = $_REQUEST['employee-salary'];
        $stmt = $conn->prepare("INSERT INTO employee_manegment (`id`, `employee_name`, `employee_address`, `employee_qualification`, `employee_designation`, `employee_salary`) VALUES (NULL, '$employee_name', '$employee_address', '$employee_qualification', '$employee_designation', '$employee_salary')");
        $result = $stmt->execute();
    }
}

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl my-5">
        <h1 class="text-xl mb-5">Welcome To Employee Management System</h1>
        <div>
            <label for="employee-name" class="block mb-2">Employee Name:</label>
            <input type="text" id="employee_name" name="employee-name" class="border-3 border-<?php if ($errorEmployeeName) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <?php if ($errorEmployeeName) {
                echo "<p class='text-red-500 text-xl'> $errorEmployeeName</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="employee-address" class="block mb-2">Employee Address:</label>
            <input type="text" id="employee_address" name="employee-address" class="border-3 border-<?php if ($errorEmployeeAddress) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <?php if ($errorEmployeeAddress) {
                echo "<p class='text-red-500 text-xl'> $errorEmployeeAddress</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="employee-qualification" class="block mb-2">Employee Qualification:</label>
            <input type="text" id="employee_qualification" name="employee-qualification" class="border-3 border-<?php if ($errorEmployeeQualification) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96"
            <?php if ($errorEmployeeQualification) {
                echo "<p class='text-red-500 text-xl'> $errorEmployeeQualification</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="employee-designation" class="block mb-2">Employee Designation:</label>
            <input type="text" id="employee_designation" name="employee-designation" class="border-3 border-<?php if ($errorEmployeeDesignation) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <?php if ($errorEmployeeDesignation) {
                echo "<p class='text-red-500 text-xl'> $errorEmployeeDesignation</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="employee-salary" class="block mb-2">Employee Salary:</label>
            <input type="number" id="employee_salary" name="employee-salary" class="border-3 border-<?php if ($errorEmployeeSalary) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <?php if ($errorEmployeeSalary) {
                echo "<p class='text-red-500 text-xl'> $errorEmployeeSalary</p>";
            } ?>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up Employees</button>
    </form>
</main>
<?php include("./footer.php") ?>