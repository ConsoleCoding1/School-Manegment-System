<?php include 'header.php'; ?>
<?php
include "./config.php";
$color = "border-blue-500";
$userPasswordError = NULL;
$userNameError = NULL;
$NameError = NULL;
$userRoleError = NULL;
$createdAtError = NULL;
$createdByError = NULL;
$errorCount = 0;
if (isset($_REQUEST["submit"])) {
    if (isset($_REQUEST["user-name"])) {
        $userNameError = "Please fill this User Name";
        $errorCount++;
    }
    if (isset($_REQUEST["user-password"])) {
        $userPasswordError = "Please fill this User Password";
        $errorCount++;
    }
    if (isset($_REQUEST["name"])) {
        $NameError = "Please fill this Name";
        $errorCount++;
    }
    if (isset($_REQUEST["user-role"])) {
        $userRoleError = "Please fill this User Role";
        $errorCount++;
    }
    if (isset($_REQUEST["user-created-at"])) {
        $createdAtError = "Please fill this Created At";
        $errorCount++;
    }
    if (isset($_REQUEST["user-created-by"])) {
        $createdByError = "Please fill this Created By";
        $errorCount++;
    }
    if ($errorCount == 0) {

        $user_name = $_REQUEST['user-name'];
        $user_password = $_REQUEST['user-password'];
        $name = $_REQUEST['name'];
        $user_role = $_REQUEST['user-role'];
        $created_at = $_REQUEST['user-created-at'];
        $created_by = $_REQUEST['user-created-by'];
        $stmt = $conn->prepare("INSERT INTO user_management (`id`, `user_name`, `user_password`, `name`, `user_role`, `created_at`, `created_by`) VALUES (NULL, '$user_name', '$user_password', '$name', '$user_role', '$created_at', '$created_by')");
        $result = $stmt->execute();
        header("Location: home.php");
    }
}
?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5 mb-5">
        <h1 class="text-xl mb-5">Welcome To User Management System</h1>
        <div>
            <label for="user-name" class="block mb-2">User Name:</label>
            <input type="text" id="user_name" name="user-name" class="border-3 border-<?php if ($userNameError) {
                                                                                            echo "red";
                                                                                        } else {
                                                                                            echo "blue";
                                                                                        } ?>-500 p-2 rounded w-96">
            <?php echo "<p class='text-red-500 text-xl'> $userNameError</p>"; ?>
        </div>
        <div class="mt-4">
            <label for="user-password" class="block mb-2">User Password:</label>
            <input type="text" id="user-password" name="user-password" class="border-3 border-<?php echo $userPasswordError ? 'red' : 'blue'; ?>-500 p-2 rounded w-full">
            <?php
            if ($userPasswordError) {
                echo "<p class='text-red-500 text-xl'>$userPasswordError</p>";
            }
            ?>
        </div>
        <div class="mt-4">
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" class="border-3 border-<?php if ($NameError) {
                                                                                echo "red";
                                                                            } else {
                                                                                echo "blue";
                                                                            } ?>-500 p-2 rounded w-full">
            <?php echo "<p class='text-red-500 text-xl'> $NameError</p>"; ?>
        </div>
        <div class="mt-4">
            <label for="user-role" class="block mb-2">User Role:</label>
            <input type="text" id="user_role" name="user-role" class="border-3 border-<?php if ($userRoleError) {
                                                                                            echo "red";
                                                                                        } else {
                                                                                            echo "blue";
                                                                                        } ?>-500 p-2 rounded w-full">
            <?php echo "<p class='text-red-500 text-xl'> $userRoleError</p>"; ?>
        </div>
        <div class="mt-4">
            <label for="user-created-at" class="block mb-2">Created at:</label>
            <input type="text" id="user_created_at" name="user-created-at" class="border-3 border-<?php if ($createdAtError) {
                                                                                                        echo "red";
                                                                                                    } else {
                                                                                                        echo "blue";
                                                                                                    } ?>-500 p-2 rounded w-full">
            <?php echo "<p class='text-red-500 text-xl'> $createdAtError</p>"; ?>
        </div>
        <div class="mt-4">
            <label for="user-created-by" class="block mb-2">Created by:</label>
            <input type="text" id="user_created_by" name="user-created-by" class="border-3 border-<?php if ($createdByError) {
                                                                                                        echo "red";
                                                                                                    } else {
                                                                                                        echo "blue";
                                                                                                    } ?>-500 p-2 rounded w-full">
            <?php echo "<p class='text-red-500 text-xl'> $createdByError</p>"; ?>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up Users</button>
    </form>
</main>
<?php include 'footer.php'; ?>