document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("productForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // First prevent default to check validation
        
        let isValid = true;
        const errors = document.querySelectorAll(".error");
        errors.forEach((error) => error.remove()); // Remove previous error messages

        // Dynamic validation rules
        const validationRules = [
            {
                field: "productName",
                message: "Product Name is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "p_code",
                message: "Product Code is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "price",
                message: "Please enter a valid price.",
                validate: function (value) {
                    return value.trim() !== "" && !isNaN(value) && parseFloat(value) > 0;
                },
            },
            {
                field: "description",
                message: "Description is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "shopName",
                message: "Shop Name is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "categories",
                message: "Please select a category.",
                validate: function(value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "productImage",
                message: "Please upload a valid image file (jpg, jpeg, png).",
                validate: function() {
                    const fileInput = document.getElementById("productImage");
                    if (!fileInput.files || fileInput.files.length === 0) return false;
                    const file = fileInput.files[0];
                    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                    return allowedExtensions.test(file.name);
                },
            },
        ];

        // Iterate over validation rules
        validationRules.forEach(function (rule) {
            const field = document.getElementById(rule.field);
            if (!field) {
                console.error(`Field with ID ${rule.field} not found`);
                return;
            }
            
            const fieldValue = field.type === "file" ? field : field.value;
            if (!rule.validate(fieldValue)) {
                isValid = false;
                // Check if error already exists
                if (!field.nextElementSibling || !field.nextElementSibling.classList.contains("error")) {
                    const error = document.createElement("div");
                    error.className = "error text-danger"; // Added text-danger for red color
                    error.textContent = rule.message;
                    // Insert after the field
                    field.parentNode.insertBefore(error, field.nextSibling);
                }
            }
        });

        // If valid, submit the form
        if (isValid) {
            form.submit();
        }
    });

    // Real-time error removal
    const fields = document.querySelectorAll("#productForm input, #productForm textarea, #productForm select");
    fields.forEach((field) => {
        field.addEventListener(field.type === "file" ? "change" : "input", function () {
            const error = this.nextElementSibling;
            if (error && error.classList.contains("error")) {
                error.remove();
            }
        });
    });
});