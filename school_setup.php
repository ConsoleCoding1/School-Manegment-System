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
if (isset($_REQUEST['submitBtn'])) {
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
    if ($_REQUEST['school_designation']) {
        $errorSchoolDesignation = "Please fill this School Designation";
        $errorCount++;
    }
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
    <form action="school_setup.php" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5 mb-5" id="schoolForm">
        <h1 class="my-5 text-2xl">Please Set Up Your School</h1>
        <div>
            <label for="school_name" class="block mb-2">School Name:</label>
            <input type="text" id="school_name" name="school_name" class="border-3 border-blue-500  p-2 rounded w-96">
            <p class='text-red-500 text-xl school_name_error'>
                <?php echo $errorSchoolName; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-address" class="block mb-2">School Address:</label>
            <input type="text" id="school-address" name="school_address" class="border-3 border-blue-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl address'>
                <?php echo $createdByError; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-phone" class="block mb-2">School Phone:</label>
            <input type="number" id="school-phone" name="school_phone" class="border-3 border-blue-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl phone'>
                <?php echo $createdByError; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-email" class="block mb-2">School Email:</label>
            <input type="email" id="school-email" name="school_email" class="border-3 border-blue-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl email'>
                <?php echo $createdByError; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-logo" class="block mb-2">School Logo Link:</label>
            <input type="text" id="school-logo" name="school_logo" class="border-3 border-blue-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl logo'>
                <?php echo $createdByError; ?>
            </p>
        </div>
        <div class="mt-4">
            <label for="school-designation" class="block mb-2">Designation:</label>
            <input type="text" id="school-designation" name="school_designation" class="border-3 border-blue-500 p-2 rounded w-96">
            <p class='text-red-500 text-xl designation'>
                <?php echo $createdByError; ?>
            </p>
        </div>
        <button name="submitBtn" type="submit" id="submitBtn" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up School</button>
    </form>
</main>

<script>
    document.querySelector("form").addEventListener("submit", function(e) {
        e.preventDefault(); // stop form submit
        let errorCount = 0;
        if (document.querySelector("#school_name").value == "") {
            document.querySelector(".school_name_error").textContent = "Please fill this School Name";
            errorCount++;
            document.querySelector("#school_name").focus();
        }
        if (document.querySelector("#school-address").value == "") {
            document.querySelector(".address").textContent = "Please fill this School Address";
            errorCount++;
        }
        if (document.querySelector("#school-phone").value == "") {
            document.querySelector(".phone").textContent = "Please fill this School Phone ";
            errorCount++;
        }
        if (document.querySelector("#school-email").value == "") {
            document.querySelector(".email").textContent = "Please fill this School Email";
            errorCount++;
        }
        if (document.querySelector("#school-logo").value == "") {
            document.querySelector(".logo").textContent = "Please fill this School Logo";
            errorCount++;
        }
        if (document.querySelector("#school-designation").value == "") {
            document.querySelector(".designation").textContent = "Please fill this School Designation";
            errorCount++;
        }

        if (errorCount == 0) {
            console.log('Form Submit');
            document.getElementById("schoolForm").submit();
        }
    });
</script>

<?php include("./footer.php") ?>