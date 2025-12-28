<?php include("./header.php") ?>
<?php
include("./config.php");
$color = "border-blue-500";
$errorEmployeeName = NULL;
$errorEmployeeAddress = NULL;
$errorEmployeeQualification = NULL;
$errorEmployeeDesignation = NULL;
$errorEmployeeSalary = NULL;
$errorCount = 0;
if (isset($_REQUEST['submitBtn'])) {
    echo "fdafdf";
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
        $errorEmployeeSalary = "Please fill this Employee ";
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
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl my-5 " id="employeeForm">
        <h1 class="text-xl mb-5">Welcome To Employee Management System</h1>
        <div>
            <label for="employee_name" class="block mb-2">Employee Name:</label>
            <input type="text" id="employee_name" name="employee-name"
                class="border-3 border-<?php if ($errorEmployeeName) {
                                            echo "red";
                                        } else {
                                            echo "blue";
                                        } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl emName'>
                <?php if ($errorEmployeeName) {
                    echo " $errorEmployeeName";
                } ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="employee_address" class="block mb-2">Employee Address:</label>
            <input type="text" id="employee_address" name="employee-address" class="border-3 border-<?php if ($errorEmployeeAddress) {
                                                                                                        echo "red";
                                                                                                    } else {
                                                                                                        echo "blue";
                                                                                                    } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl emAddress'>
                <?php if ($errorEmployeeAddress) {
                    echo " $errorEmployeeAddress";
                } ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="employee_qualification" class="block mb-2">Employee Qualification:</label>
            <input type="text" id="employee_qualification" name="employee-qualification" class="border-3 border-<?php if ($errorEmployeeQualification) {
                                                                                                                    echo "red";
                                                                                                                } else {
                                                                                                                    echo "blue";
                                                                                                                } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl emQualification'>
                <?php if ($errorEmployeeQualification) {
                    echo " $errorEmployeeQualification";
                } ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="employee_designation" class="block mb-2">Employee Designation:</label>
            <input type="text" id="employee_designation" name="employee-designation" class="border-3 border-<?php if ($errorEmployeeDesignation) {
                                                                                                                echo "red";
                                                                                                            } else {
                                                                                                                echo "blue";
                                                                                                            } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl emDesignation'>
                <?php if ($errorEmployeeDesignation) {
                    echo " $errorEmployeeDesignation";
                } ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="employee_salary" class="block mb-2">Employee Salary:</label>
            <input type="number" id="employee_salary" name="employee-salary" class="border-3 border-<?php if ($errorEmployeeSalary) {
                                                                                                        echo "red";
                                                                                                    } else {
                                                                                                        echo "blue";
                                                                                                    } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl emSalary'>
                <?php if ($errorEmployeeSalary) {
                    echo " $errorEmployeeSalary";
                } ?>
            </p>
        </div>
        <button name="submitBtn" type="submit" id="submitBtn" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up Employees</button>
    </form>
</main>
<script>
    document.querySelector("#employeeForm").addEventListener("submit", function(e) {
        let errorCount = 0;
        if (document.querySelector("#employee_name").value == "") {
            document.querySelector(".emName").textContent = "Please fill this Employee Name";
            errorCount++;
            document.querySelector("#employee_name").focus();
        }
        if (document.querySelector("#employee_address").value == "") {
            document.querySelector(".emAddress").textContent = "Please fill this Employee Address";
            document.querySelector("#employee_address").focus();
            errorCount++;
        }
        if (document.querySelector("#employee_qualification").value == "") {
            document.querySelector(".emQualification").textContent = "Please fill this Employee qualification";
            document.querySelector("#employee_qualification").focus();
            errorCount++;
        }
        if (document.querySelector("#employee_designation").value == "") {
            document.querySelector(".emDesignation").textContent = "Please fill this Employee designation";
            document.querySelector("#employee_designation").focus();
            errorCount++;
        }
        if (document.querySelector("#employee_salary").value == "") {
            document.querySelector(".emSalary").textContent = "Please fill this Employee Salary";
            document.querySelector("#employee_salary").focus();
            errorCount++;
        }

        if (errorCount > 0) {
            e.preventDefault(); //  only block when errors exist
        }
    });
</script>
<?php include("./footer.php") ?>