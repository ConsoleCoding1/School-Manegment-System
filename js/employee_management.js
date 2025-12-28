document.querySelector("#employeeForm").addEventListener("submit", (e) => {
    let errorCount = 0;
    e.preventDefault();

    document.querySelectorAll(".inputError").forEach(el => {
        el.classList.remove("inputError", "placeholder-red-500");
    });
    if (document.querySelector("#employee_name").value == "") {
        document.querySelector(".emName").textContent = "Please fill this Employee Name";
        errorCount++;
    }
    if (document.querySelector("#employee_address").value == "") {
        document.querySelector(".emAddress").textContent = "Please fill this Employee Address";
        errorCount++;
    }
    if (document.querySelector("#employee_qualification").value == "") {
        document.querySelector(".emQualification").textContent = "Please fill this Employee qualification";
        errorCount++;
    }
    if (document.querySelector("#employee_designation").value == "") {
        document.querySelector(".emDesignation").textContent = "Please fill this Employee designation";
        errorCount++;
    }
    if (document.querySelector("#employee_salary").value == "") {
        document.querySelector(".emSalary").textContent = "Please fill this Employee Salary";
        errorCount++;
    }

    // Set focus to the first empty field
    if (document.getElementById("employee_name").value === "") {
        document.querySelector("#employee_name").focus();
    }
    else if (document.getElementById("employee_address").value === "") {
        document.querySelector("#employee_address").focus();
    }
    else if (document.getElementById("employee_qualification").value === "") {
        document.querySelector("#employee_qualification").focus();
    }
    else if (document.getElementById("employee_designation").value === "") {
        document.querySelector("#employee_designation").focus();
    }
    else if (document.getElementById("employee_salary").value === "") {
        document.querySelector("#employee_salary").focus();
    }
    else {

        const data = {
            employee_name: document.getElementById("employee_name").value,
            employee_address: document.getElementById("employee_address").value,
            employee_qualification: document.getElementById("employee_qualification").value,
            employee_designation: document.getElementById("employee_designation").value,
            employee_salary: document.getElementById("employee_salary").value,
        };
        fetch('./php/employee_management.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
            dataType: 'json',
            data: data
        }).then(response => response.text())
            .then(result => {
                const parsedResult = JSON.parse(result);

                document.getElementById("success").innerText = parsedResult.message;

                const alertBox = document.getElementById("successAlert");

                // SHOW: slide down from top
                alertBox.classList.remove("hidden");
                requestAnimationFrame(() => {
                    alertBox.classList.remove("-translate-y-10", "opacity-0");
                    alertBox.classList.add("translate-y-0", "opacity-100");
                });

                document.getElementById("employeeForm").reset();

                // HIDE: slide up to top
                setTimeout(() => {
                    alertBox.classList.remove("translate-y-0", "opacity-100");
                    alertBox.classList.add("-translate-y-10", "opacity-0");

                    setTimeout(() => {
                        alertBox.classList.add("hidden");
                    }, 500);
                }, 3000);
            });

    }
})