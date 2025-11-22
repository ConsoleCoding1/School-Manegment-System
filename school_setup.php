<?php include("./header.php") ?>
<?php
include("./config.php");
$color = "border-blue-500";
$errorSchoolName = NULL;
$errorSchoolAddress = NULL;
$errorSchoolPhone = NULL;
$errorSchoolEmail = NULL;
$errorSchoolLogo = NULL;
$errorSchoolLogoLink = NULL;
$errorSchoolDesignation = NULL;
$errorCount = 0;
if (isset($_REQUEST['submit'])) {
    if (isset($_REQUEST["school-name"])) {
        $errorSchoolName = "Please fill this User Name";
        $errorCount++;
    }
    if (isset($_REQUEST["school-address"])) {
        $errorSchoolAddress = "Please fill this User Password";
        $errorCount++;
    }
    if (isset($_REQUEST["school-phone"])) {
        $errorSchoolPhone = "Please fill this School Phone";
        $errorCount++;
    }
    if (isset($_REQUEST["school-email"])) {
        $errorSchoolEmail = "Please fill this School Email";
        $errorCount++;
    }
    if (isset($_REQUEST["school-logo"])) {
        $errorSchoolLogo = "Please fill this School Logo Link";
        $errorCount++;
    }
    if (isset($_REQUEST['school-designation'])) {
        $errorSchoolDesignation = "Please fill this School Designation";
        $errorCount++;
    }
    if ($errorCount == 0) {

        $name = $_REQUEST['school-name'];
        $address = $_REQUEST['school-address'];
        $phone = $_REQUEST['school-phone'];
        $email = $_REQUEST['school-email'];
        $logo = $_REQUEST['school-logo'];
        $designation = $_REQUEST['school-designation'];
        $stmt = $conn->prepare("INSERT INTO school_setting (`id`, `school_name`, `address`, `phone_no`, `email`, `logo`, `designation`) VALUES (NULL, '$name', '$address', '$phone', '$email', '$logo', '$designation')");
        $result = $stmt->execute();
    }
}

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5 mb-5">
        <h1 class="my-5 text-2xl">Please Set Up Your School</h1>
        <div>
            <label for="school-name" class="block mb-2">School Name:</label>
            <input type="text" id="school-name" name="school-name" value="<?php if(isset($_REQUEST['school-name'])) { echo $_REQUEST['school-name']; } ?>" class="border-3 border-<?php if ($errorSchoolName) {
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
            <input type="text" id="school-address" name="school-address" value="<?php if(isset($_REQUEST['school-address'])) { echo $_REQUEST['school-address']; } ?>" class="border-3 border-<?php if ($errorSchoolAddress) {
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
            <input type="number" id="school-phone" name="school-phone" value="<?php if(isset($_REQUEST['school-phone'])) { echo $_REQUEST['school-phone']; } ?>" class="border-3 border-<?php if ($errorSchoolPhone) {
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
            <input type="email" id="school-email" name="school-email" value="<?php if(isset($_REQUEST['school-email'])) { echo $_REQUEST['school-email']; } ?>" class="border-3 border-<?php if ($errorSchoolEmail) {
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
            <input type="text" id="school-logo" name="school-logo" value="<?php if(isset($_REQUEST['school-logo'])) { echo $_REQUEST['school-logo']; } ?>" class="border-3 border-<?php if ($errorSchoolLogo) {
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
            <input type="text" id="school-designation" name="school-designation" value="<?php if(isset($_REQUEST['school-designation'])) { echo $_REQUEST['school-designation']; } ?>" class="border-3 border-<?php if ($errorSchoolDesignation) {
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