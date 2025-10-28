<?php include 'header.php'; ?>
<link rel="stylesheet" href="output.css">
<main class="flex flex-col justify-center items-center min-h-screen bg-linear-to-br from-red-400 via-orange-400 to-red-500">
    <form action="" method="post" class="bg-white px-10 py-15 rounded-2xl mt-5">
        <h1 class="text-xl mb-5">Welcome To User Management System</h1>
        <div>
            <label for="user-name" class="block mb-2">User Name:</label>
            <input type="text" id="user_name" name="user-name" class="border-3 border-red-500 p-2 rounded w-96" required>
        </div>
        <div class="mt-4">
            <label for="user-password" class="block mb-2">User Password:</label>
            <input type="text" id="user_password" name="user-password" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="user-qualification" class="block mb-2">Name:</label>
            <input type="text" id="user_qualification" name="user-qualification" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="user-designation" class="block mb-2">User Role:</label>
            <input type="text" id="user_designation" name="user-designation" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="user-salary" class="block mb-2">Created at:</label>
            <input type="number" id="user_salary" name="user-salary" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <div class="mt-4">
            <label for="user-salary" class="block mb-2">Created :</label>
            <input type="number" id="user_salary" name="user-salary" class="border-3 border-red-500 p-2 rounded w-full" required>
        </div>
        <button name="submit" type="submit" class="mt-6 bg-blue-500 text-white py-2 px-4 rounded">Set Up Users</button>
    </form>
</main>
<?php include 'footer.php'; ?>