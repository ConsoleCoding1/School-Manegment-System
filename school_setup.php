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
if (isset($_POST['submitBtn'])) {
    if ($_POST['school_name'] == '') {
        $errorSchoolName = "Please fill this School Name";
        $errorCount++;
    }

    if ($_POST['school_address'] == '') {
        $errorSchoolAddress = "Please fill this School Address";
        $errorCount++;
    }

    if ($_POST['school_phone'] == '') {
        $errorSchoolPhone = "Please fill this School Phone";
        $errorCount++;
    }

    if ($_POST['school_email'] == '') {
        $errorSchoolEmail = "Please fill this School Email";
        $errorCount++;
    }

    if ($_POST['school_logo'] == '') {
        $errorSchoolLogo = "Please fill this School Logo Link";
        $errorCount++;
    }

    if ($_POST['school_designation'] == '') {
        $errorSchoolDesignation = "Please fill this School Designation";
        $errorCount++;
    }

    if ($errorCount == 0) {
        $schoolName = $_REQUEST['school_name'];
        $schoolAddress = $_REQUEST['school_address'];
        $schoolPhone = $_REQUEST['school_phone'];
        $schoolEmail = $_REQUEST['school_email'];
        $schoolLogo = $_REQUEST['school_logo'];
        $schoolDesignation = $_REQUEST['school_designation'];
        $query = "INSERT INTO school_setting (`school_name`, `address`, `phone_no`, `email`, `logo`, `designation`) 
                                    VALUES ('$schoolName', '$schoolAddress', '$schoolPhone', '$schoolEmail', '$schoolLogo', '$schoolDesignation')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    }
}

$getData = $conn->prepare("SELECT * FROM `school_setting`");
$getData->execute();
$Data = $getData->fetchAll();
if (empty($Data)) {
    $Data = [];
}

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="school_setup.php" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5 mb-5" id="schoolForm">
        <h1 class="my-5 text-2xl">Please Set Up Your School</h1>
        <div>
            <label for="school_name" class="block mb-2">School Name:</label>
            <input type="text" id="school_name" name="school_name" value="<?= !empty($Data) && isset($Data[0]['school_name']) ? $Data[0]['school_name'] : '' ?>" class="border-3 border-blue-500  p-2 rounded w-96">
            <p class='text-red-500 text-xl school_name_error'>
                <?php echo $errorSchoolName; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-address" class="block mb-2">School Address:</label>
            <input type="text" id="school-address" name="school_address" value="<?= !empty($Data) && isset($Data[0]['address']) ? $Data[0]['address'] : '' ?>" class="border-3 border-<?php if ($errorSchoolAddress) {
                                                                                                                echo "red";
                                                                                                            } else {
                                                                                                                echo "blue";
                                                                                                            } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl address'>
                <?php echo $errorSchoolAddress; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-phone" class="block mb-2">School Phone:</label>
            <input type="" id="school-phone" name="school_phone" value="<?= !empty($Data) && isset($Data[0]['phone_no']) ? $Data[0]['phone_no'] : '' ?>" class="border-3 border-<?php if ($errorSchoolPhone) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl phone'>
                <?php echo $errorSchoolPhone; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-email" class="block mb-2">School Email:</label>
            <input type="email" id="school-email" name="school_email" value="<?= !empty($Data) && isset($Data[0]['email']) ? $Data[0]['email'] : '' ?>" class="border-3 border-<?php if ($errorSchoolEmail) {
                                                                                                            echo "red";
                                                                                                        } else {
                                                                                                            echo "blue";
                                                                                                        } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl email'>
                <?php echo $errorSchoolEmail; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-logo" class="block mb-2">School Logo Link:</label>
            <input type="text" id="school-logo" name="school_logo" value="<?= !empty($Data) && isset($Data[0]['logo']) ? $Data[0]['logo'] : '' ?>" class="border-3 border-<?php if ($errorSchoolLogo) {
                                                                                                        echo "red";
                                                                                                    } else {
                                                                                                        echo "blue";
                                                                                                    } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl logo'>
                <?php echo $errorSchoolLogo; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-designation" class="block mb-2">Designation:</label>
            <input type="text" id="school-designation" name="school_designation" value="<?= !empty($Data) && isset($Data[0]['designation']) ? $Data[0]['designation'] : '' ?>" class="border-3 border-<?php if ($errorSchoolDesignation) {
                                                                                                                        echo "red";
                                                                                                                    } else {
                                                                                                                        echo "blue";
                                                                                                                    } ?>-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl designation'>
                <?php echo $errorSchoolDesignation; ?>
            </p>
        </div>
        <button name="submitBtn" type="submit" id="submitBtn" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up School</button>
    </form>
</main>

<script>
document.getElementById("schoolForm").addEventListener("submit", function (e) {

    let errorCount = 0;

    document.querySelectorAll(".text-red-500").forEach(el => el.textContent = "");

    if (document.getElementById("school_name").value.trim() === "") {
        document.querySelector(".school_name_error").textContent = "Please fill this School Name";
        errorCount++;
    }

    if (document.getElementById("school-address").value.trim() === "") {
        document.querySelector(".address").textContent = "Please fill this School Address";
        errorCount++;
    }

    if (document.getElementById("school-phone").value.trim() === "") {
        document.querySelector(".phone").textContent = "Please fill this School Phone";
        errorCount++;
    }

    if (document.getElementById("school-email").value.trim() === "") {
        document.querySelector(".email").textContent = "Please fill this School Email";
        errorCount++;
    }

    if (document.getElementById("school-logo").value.trim() === "") {
        document.querySelector(".logo").textContent = "Please fill this School Logo";
        errorCount++;
    }

    if (document.getElementById("school-designation").value.trim() === "") {
        document.querySelector(".designation").textContent = "Please fill this School Designation";
        errorCount++;
    }

    if (errorCount > 0) {
        e.preventDefault(); //  only block when errors exist
    }
});
</script>


<?php include("./footer.php") ?>