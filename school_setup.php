<?php include("./header.php") ?>
<?php
    include("./config.php");
    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST['school-name'];
        $address = $_REQUEST['school-address'];
        $phone = $_REQUEST['school-phone'];
        $email = $_REQUEST['school-email'];
        $logo = $_REQUEST['school-logo'];
        $designation = $_REQUEST['school-designation'];
        $stmt = $conn->prepare("INSERT INTO school_setting (`id`, `school_name`, `address`, `phone_no`, `email`, `logo`, `designation`) VALUES (NULL, '$name', '$address', '$phone', '$email', '$logo', '$designation')");
        $result = $stmt->execute();
    }

?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-tr from-yellow-200 via-red-400 to-blue-300">
    <h1 class="my-5 text-2xl">Please Set Up Your School</h1>
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl">
        <div>
            <label for="school-name" class="block mb-2">School Name:</label>
            <input type="text" id="school-name" name="school-name" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="school-address" class="block mb-2">School Address:</label>
            <input type="text" id="school-address" name="school-address" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="school-phone" class="block mb-2">School Phone:</label>
            <input type="number" id="school-phone" name="school-phone" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="school-email" class="block mb-2">School Email:</label>
            <input type="email" id="school-email" name="school-email" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="school-logo" class="block mb-2">School Logo Link:</label>
            <input type="text" id="school-logo" name="school-logo" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="school-designation" class="block mb-2">Designation:</label>
            <input type="text" id="school-designation" name="school-designation" class="border border-amber-500 p-2 rounded w-full" required>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up School</button>
    </form>
</main>
<?php include("./footer.php") ?>