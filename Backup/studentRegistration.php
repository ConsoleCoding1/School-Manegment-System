<?php include "./config.php"; ?>
<?php include 'header.php'; ?>
<title>Student Registration</title>
<link rel="stylesheet" href="output.css">

<div class="bg-gray-100 py-10">
    <form
        action=""
        method="post"
        id="registr_Form"
        class="max-w-5xl mx-auto my-16 bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Student Registration</h1>
            <p class="mt-2 text-gray-500 text-lg">Please fill in the details accurately</p>
        </div>

        <!-- Full Name -->
        <div class="mb-3">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Student Details</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xl text-gray-500 mb-1">First Name</label>
                    <input id="f_name" type="text" name="fName"
                        class="w-full rounded-xl border-2 px-4 py-3" placeholder="First Name">
                    <p class="text-sm text-red-500 fNameErr"></p>
                </div>

                <div>
                    <label class="block text-xl text-gray-500 mb-1">Middle Name</label>
                    <input id="m_name" type="text" name="mName"
                        class="w-full rounded-xl border-2 px-4 py-3" placeholder="Middle Name">
                    <p class="text-sm text-red-500 mNameErr"></p>
                </div>

                <div>
                    <label class="block text-xl text-gray-500 mb-1">Last Name</label>
                    <input id="l_name" type="text" name="lName"
                        class="w-full rounded-xl border-2 px-4 py-3" placeholder="Last Name">
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="mb-3 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xl text-gray-500 mb-1">Student Number</label>
                <input id="student_number" type="number" name="studentNumber"
                    class="w-full rounded-xl border-2 px-4 py-3" placeholder="Student Name">
                <p class="text-sm text-red-500 studentNumberErr"></p>
            </div>

            <div>
                <label class="block text-xl text-gray-500 mb-1">Student Email</label>
                <input id="student_email" type="email" name="studentEmail"
                    class="w-full rounded-xl border-2 px-4 py-3" placeholder="Student Email">
                <p class="text-sm text-red-500 studentEmailErr"></p>
            </div>
        </div>

        <!-- Personal -->
        <div class="mb-3 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xl text-gray-500 mb-1">Date of Birth</label>
                <input id="dob" type="date" name="dob"
                    class="w-full rounded-xl border-2 px-4 py-3">
                <p class="text-sm text-red-500 studentDOBErr"></p>
            </div>

            <div>
                <label class="block text-xl text-gray-500 mb-1">Gender</label>
                <input id="gender" type="text" name="gender" placeholder="Gender"
                    class="w-full rounded-xl border-2 px-4 py-3">
                <p class="text-sm text-red-500 studentGenderErr"></p>
            </div>

            <div>
                <label class="block text-xl text-gray-500 mb-1">Grade</label>
                <input id="grade" type="text" name="grade" placeholder="Grade"
                    class="w-full rounded-xl border-2 px-4 py-3">
                <p class="text-sm text-red-500 studentGradeErr"></p>
            </div>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Primary Address</h2>

            <input id="street_address" type="text" name="streetAddress" id="street_address"
                placeholder="Street Address"
                class="w-full rounded-xl border-2 px-4 py-3">
            <p class="text-sm text-red-500 streetErr"></p>

            <input type="text" name="streetAddressLine2"
                placeholder="Street Address Line 2 (Optional)"
                class="w-full mt-4 rounded-xl border-2 px-4 py-3">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>

                    <input id="city" type="text" name="city" placeholder="City" id="city"
                        class="w-full rounded-xl border-2 px-4 py-3">
                    <p class="text-sm text-red-500 cityErr"></p>
                </div>
                <div>

                    <input id="state_province" type="text" name="stateProvince" placeholder="State / Province" id="state_province"
                        class="w-full rounded-xl border-2 px-4 py-3">
                    <p class="text-sm text-red-500 stateErr"></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>
                    <input id="zip_code" type="text" name="zipCode" placeholder="Postal / Zip Code" id="zip_code"
                        class="w-full rounded-xl border-2 px-4 py-3">
                    <p class="text-sm text-red-500 zipErr"></p>

                </div>
                <div>

                    <input id="country" type="text" name="country" placeholder="Country" id="country"
                        class="w-full rounded-xl border-2 px-4 py-3">
                    <p class="text-sm text-red-500 countryErr"></p>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="text-center">
            <button type="submit"
                class="rounded-full bg-linear-to-r from-blue-600 cursor-pointer to-indigo-600 px-10 py-4 text-lg font-semibold text-white">
                Submit Registration
            </button>
        </div>
    </form>
</div>


<!-- Validation Script -->
<script>
    document.getElementById("registr_Form").addEventListener("submit", function(e) {

        let errorCount = 0;
        document.querySelectorAll(".text-red-500").forEach(el => el.textContent = "");

        if (document.getElementById("f_name").value.trim() === "") {
            document.querySelector(".fNameErr").textContent = "First name is required";
            document.getElementById("f_name").classList.add("border-red-500");
            errorCount++;
        }
        if (document.getElementById("m_name").value.trim() === "") {
            document.querySelector(".mNameErr").textContent = "Middle name is required";
            document.getElementById("m_name").classList.add("border-red-500");
            errorCount++;
        }

        if (document.getElementById("student_number").value.trim() === "") {
            document.getElementById("student_number").classList.add("border-red-500");
            document.querySelector(".studentNumberErr").textContent = "Student number is required";
            errorCount++;
        }

        if (document.getElementById("student_email").value.trim() === "") {
            document.getElementById("student_email").classList.add("border-red-500");
            document.querySelector(".studentEmailErr").textContent = "Student email is required";
            errorCount++;
        }

        if (document.getElementById("dob").value.trim() === "") {
            document.getElementById("dob").classList.add("border-red-500");
            document.querySelector(".studentDOBErr").textContent = "Date of birth is required";
            errorCount++;
        }

        if (document.getElementById("gender").value.trim() === "") {
            document.getElementById("gender").classList.add("border-red-500");
            document.querySelector(".studentGenderErr").textContent = "Gender is required";
            errorCount++;
        }

        if (document.getElementById("grade").value.trim() === "") {
            document.getElementById("grade").classList.add("border-red-500");
            document.querySelector(".studentGradeErr").textContent = "Grade is required";
            errorCount++;
        }

        if (document.getElementById("street_address").value.trim() === "") {
            document.getElementById("street_address").classList.add("border-red-500");
            document.querySelector(".streetErr").textContent = "Street address is required";
            errorCount++;
        }
        if (document.getElementById("city").value.trim() === "") {
            document.getElementById("city").classList.add("border-red-500");
            document.querySelector(".cityErr").textContent = "City is required";
            errorCount++;
        }
        if (document.getElementById("state_province").value.trim() === "") {
            document.getElementById("state_province").classList.add("border-red-500");
            document.querySelector(".stateErr").textContent = "State is required";
            errorCount++;
        }
        if (document.getElementById("zip_code").value.trim() === "") {
            document.getElementById("zip_code").classList.add("border-red-500");
            document.querySelector(".zipErr").textContent = "Zip code is required";
            errorCount++;
        }
        if (document.getElementById("country").value.trim() === "") {
            document.getElementById("country").classList.add("border-red-500");
            document.querySelector(".countryErr").textContent = "Country is required";
            errorCount++;
        }

        if (errorCount > 0) {
            e.preventDefault();
        }
    });
</script>


</body>

</html>

<!-- <hp include "./footer.php;  -->