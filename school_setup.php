<?php include "./header.php"  ?>
<?php
include "./config.php";
$color = "border-blue-500";
$errorSchoolDesignation = NULL;
$errorSchoolName = NULL;
$errorSchoolAddress = NULL;
$errorSchoolPhone = NULL;
$errorSchoolEmail = NULL;
$errorSchoolLogo = NULL;
$errorSchoolLogoLink = NULL;
$errorCount = 0;
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST["school_name"] == '') {
        $errorSchoolName = "Please fill this User Name";
        $errorCount++;
    }
    if ($_REQUEST["school_address"] == '') {
        $errorSchoolAddress = "Please fill this User Password";
        $errorCount++;
    }
    if ($_REQUEST["school_phone"]  == '') {
        $errorSchoolPhone = "Please fill this School Phone";
        $errorCount++;
    }
    if ($_REQUEST["school_email"] == '') {
        $errorSchoolEmail = "Please fill this School Email";
        $errorCount++;
    }
    if ($_REQUEST["school_logo"] == '') {
        $errorSchoolLogo = "Please fill this School Logo Link";
        $errorCount++;
    }
    // if ($_REQUEST['school_designation']) {
    //     $errorSchoolDesignation = "Please fill this School Designation";
    //     $errorCount++;
    // }
    if ($errorCount == 0) {
        $name = $_REQUEST['school_name'];
        $address = $_REQUEST['school_address'];
        $phone = $_REQUEST['school_phone'];
        $email = $_REQUEST['school_email'];
        $logo = $_REQUEST['school_logo'];
        $designation = $_REQUEST['school_designation'];
        $query = "INSERT INTO school_setting (`id`, `school_name`, `address`, `phone_no`, `email`, `logo`, `designation`) 
                                    VALUES (NULL, '$name', '$address', '$phone', '$email', '$logo', '$designation')";
                                          
        $stmt = $conn->prepare(query: $query);
        $stmt->execute();
    }
}

$getData = $conn->prepare("SELECT * FROM `employee_manegment` WHERE 1");
$getData->execute();
$Data = $getData->fetchAll();

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5 mb-5">
        <h1 class="my-5 text-2xl">Please Set Up Your School</h1>
        <div>
            <label for="school-name" class="block mb-2">School Name:</label>
            <input type="text" id="school-name" name="school_name" 
            value="<?php if(isset($_REQUEST['school_name'])) { echo $_REQUEST['school_name']; } ?>" 
            class="border-3 border-<?php if ($errorSchoolName) {
                                            echo "red";
                                        } else {
                                            echo "blue";
                                        } ?>-500  p-2 rounded w-96">
            <?php if ($errorSchoolName) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolName</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="school-address" class="block mb-2">School Address:</label>
            <input type="text" id="school-address" name="school_address" value="<?php if(isset($_REQUEST['school_address'])) { echo $_REQUEST['school_address']; } ?>" class="border-3 border-<?php if ($errorSchoolAddress) {
                                                                                                    echo "red";
                                                                                                } else {
                                                                                                    echo "blue";
                                                                                                } ?>-500 p-2 rounded w-96">
            <?php if ($errorSchoolAddress) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolAddress</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="school-phone" class="block mb-2">School Phone:</label>
            <input type="number" id="school-phone" name="school_phone" value="<?php if(isset($_REQUEST['school_phone'])) { echo $_REQUEST['school_phone']; } ?>" class="border-3 border-<?php if ($errorSchoolPhone) {
                                                                                                    echo "red";
                                                                                                } else {
                                                                                                    echo "blue";
                                                                                                } ?>-500 p-2 rounded w-96">
            <?php if ($errorSchoolPhone) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolPhone</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="school-email" class="block mb-2">School Email:</label>
            <input type="email" id="school-email" name="school_email" value="<?php if(isset($_REQUEST['school_email'])) { echo $_REQUEST['school_email']; } ?>" class="border-3 border-<?php if ($errorSchoolEmail) {
                                                                                                    echo "red";
                                                                                                } else {
                                                                                                    echo "blue";
                                                                                                } ?>-500 p-2 rounded w-96">
            <?php if ($errorSchoolEmail) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolEmail</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="school-logo" class="block mb-2">School Logo Link:</label>
            <input type="text" id="school-logo" name="school_logo" value="<?php if(isset($_REQUEST['school_logo'])) { echo $_REQUEST['school_logo']; } ?>" class="border-3 border-<?php if ($errorSchoolLogo) {
                                                                                                echo "red";
                                                                                            } else {
                                                                                                echo "blue";
                                                                                            } ?>-500 p-2 rounded w-96">
            <?php if ($errorSchoolLogo) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolLogo</p>";
            } ?>
        </div>
        <div class="mt-4">
            <label for="school-designation" class="block mb-2">Designation:</label>
            <input type="text" id="school-designation" name="school_designation" value="<?php if(isset($_REQUEST['school_designation'])) { echo $_REQUEST['school_designation']; } ?>" class="border-3 border-<?php if ($errorSchoolDesignation) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <?php if ($errorSchoolDesignation) {
                echo "<p class='text-red-500 text-xl'> $errorSchoolDesignation</p>";
            } ?>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up School</button>
    </form>
</main>
<?php include("./footer.php") ?>


<script>

</script>