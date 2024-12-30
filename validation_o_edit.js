document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("productForm");

    form.addEventListener("submit", function (e) {
        let isValid = true;
        const errors = document.querySelectorAll(".error");
        errors.forEach((error) => error.remove()); // Remove previous error messages

        // Validation rules for the offer form
        const validationRules = [
            {
                field: "productName",
                message: "Offer Title is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "price",
                message: "Please enter a valid offer percentage (e.g., 10% or 10.5%).",
                validate: function (value) {
                    const percentagePattern = /^\d+(\.\d{1,2})?%$/; // Number followed by %
                    return value.trim() !== "" && percentagePattern.test(value);
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
    field: "productImage",
    message: "Please upload a valid image file (jpg, jpeg, png).",
    validate: function () {
        const fileInput = document.getElementById("productImage");
        const file = fileInput.files[0];
        if (!file) return true; // Allow null (no file selected)
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        return allowedExtensions.test(file.name);
    },
}
        ];

        // Iterate over validation rules
        validationRules.forEach(function (rule) {
            const field = document.getElementById(rule.field);
            const fieldValue = field.type === "file" ? field.files : field.value; // Handle file inputs correctly
            if (!rule.validate(fieldValue)) {
                isValid = false;
                const error = document.createElement("div");
                error.className = "error";
                error.textContent = rule.message;
                field.parentNode.insertBefore(error, field.nextSibling);
            }
        });

        // If not valid, prevent form submission
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Real-time error removal
    const fields = document.querySelectorAll("#productForm input, #productForm textarea");
    fields.forEach((field) => {
        field.addEventListener(field.type === "file" ? "change" : "input", function () {
            const error = this.nextElementSibling;
            if (error && error.classList.contains("error")) {
                const validationRules = {
                    productName: (value) => value.trim() !== "",
                    price: (value) => /^\d+(\.\d{1,2})?%$/.test(value.trim()),
                    description: (value) => value.trim() !== "",
                    productImage: () => {
                        const fileInput = document.getElementById("productImage");
                        const file = fileInput.files[0];
                        if (!file) return false;
                        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                        return allowedExtensions.test(file.name);
                    },
                };

                const isValid = validationRules[this.id](this.value);
                if (isValid) {
                    error.remove();
                }
            }
        });
    });
});
