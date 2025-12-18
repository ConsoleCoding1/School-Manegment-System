<?php include "./config.php"; ?>
<?php include 'header.php'; ?>
<title>Student Registration</title>
<link rel="stylesheet" href="output.css">
<div class="bg-gray-200 p-2">
    <form action="" class="my-10 bg-white px-10 py-15 rounded-2xl shadow-lg md:w-fit w-auto mx-auto">
        <h1 class="text-4xl font-light text-center mb-6">Student Registration Form</h1>
        <div class="mb-4">
            <p class="text-2xl font-light">Full Name</p>
            <div class="w-full flex gap-2">
                <div>
                    <input type="text" name="fName" id="f-name" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl  rounded-lg px-3 py-2 w-fit focus:outline-blue-500">
                    <p class="text-sm text-gray-400">First Name</p>
                </div>
                <div>
                    <input type="text" name="fName" id="f-name" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl  rounded-lg px-3 py-2 w-fit focus:outline-blue-500">
                    <p class="text-sm text-gray-400">Middle Name</p>
                </div>
                <div>
                    <input type="text" name="fName" id="f-name" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl  rounded-lg px-3 py-2 w-fit focus:outline-blue-500">
                    <p class="text-sm text-gray-400">Last Name</p>
                </div>
            </div>
            <div class="flex w-full gap-5 mt-5">
                <div class="w-[50%]">
                    <p>Student Number</p>
                    <input type="number" name="studentNumber" id="student-number" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                </div>
                <div class="w-[50%]">
                    <p>Student Email</p>
                    <input type="email" name="studentEmail" id="student-email" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                </div>
            </div>
            <div class="mt-5">
                <p>Date of Birth</p>
                <div class="w-full">
                    <input type="date" name="dob" id="dob" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                </div>
            </div>
            <div class="mt-5">
                <p class="text-2xl font-light">Address</p>
                <div class="w-full mt-5">
                    <input type="text" name="streetAddress" id="present-address" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                    <p class="text-sm text-gray-400">Street Address</p>
                </div>
                <div class="w-full mt-5">
                    <input type="text" name="streetAddress" id="present-address" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                    <p class="text-sm text-gray-400">Street Address (Line 2) (Optional)</p>
                </div>
                <div class="w-full flex gap-5 mt-5">
                    <div class="w-[50%]">
                        <input type="text" name="city" id="city" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                        <p class="text-sm text-gray-400">City</p>
                    </div>
                    <div class="w-[50%]">
                        <input type="text" name="stateProvince" id="state-province" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                        <p class="text-sm text-gray-400">State / Province</p>
                    </div>
                </div>
                <div class="w-full flex gap-5 mt-5">
                    <div class="w-[50%]">
                        <input type="text" name="zipCode" id="zip-code" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                        <p class="text-sm text-gray-400">Postal / Zip Code</p>
                    </div>
                    <div class="w-[50%]">
                        <input type="text" name="country" id="country" class="border-2 hover:border-blue-400 hover:shadow-blue-500 hover:shadow-2xl w-full  rounded-lg px-3 py-2 focus:outline-blue-500">
                        <p class="text-sm text-gray-400">Country</p>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" id="register" class=" bg-linear-to-tr from-blue-500 via-yellow-200 to-red-300 hover:bg-linear-to-br hover:from-red-300 hover:via-yellow-200 hover:to-blue-500 cursor-pointer text-white py-2 px-4 rounded mt-5">Submit</button>
        </div>
    </form>
</div>
<?php include "./footer.php"; ?>