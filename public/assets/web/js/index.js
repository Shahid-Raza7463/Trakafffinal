// Toggle button
document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("btn");

    // Get the value of 'order_by' from the URL
    var queryParams = new URLSearchParams(window.location.search);
    var order_by = queryParams.get("order_by");

    // Set the initial position of the btn based on 'order_by'
    if (order_by === "reviews") {
        btn.style.left = "97px";
    } else {
        btn.style.left = "0";
    }

    function leftClick() {
        btn.style.left = "0";
    }

    function rightClick() {
        btn.style.left = "97px";
    }

    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// Add event listeners to the buttons
var navLinkBtns = document.querySelectorAll(".nav-tab-btn");
navLinkBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
        // Remove active class from all buttons
        navLinkBtns.forEach(function (btn) {
            btn.classList.remove("active");
        });

        // Add active class to the clicked button
        this.classList.add("active");
    });
});

// Add event listeners to the buttons
var navHeadBtns = document.querySelectorAll(".h-nav");
navHeadBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
        // Remove active class from all buttons
        navHeadBtns.forEach(function (btn) {
            btn.classList.remove("active");
        });

        // Add active class to the clicked button
        this.classList.add("active");
    });
});

//file upload button in registration form
document.getElementsById("file-upload").addEventListener("change", function () {
    var fileName = this.value.split("\\").pop();
    var label = this.parentNode.querySelector("label");
    label.innerText = fileName;
});

document.addEventListener("DOMContentLoaded", function () {
    var descriptions = document.querySelectorAll(".description");
    var readMores = document.querySelectorAll(".read-more");

    readMores.forEach(function (readMore, index) {
        readMore.addEventListener("click", function () {
            descriptions[index].classList.toggle("truncated");
            readMore.textContent = descriptions[index].classList.contains(
                "truncated"
            )
                ? "Read More"
                : "Read Less";
        });
    });
});

//filter options
function redirectToPage(selectElement) {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const link = selectedOption.value;

    if (link) {
        window.location.href = link;
    }
}

// read more function
function toggleReadMore() {
    var description = document.getElementById("networkDescription");
    var btnText = document.getElementById("myBtn");

    if (description.classList.contains("expanded")) {
        description.classList.remove("expanded");
        btnText.innerHTML = "Read more";
    } else {
        description.classList.add("expanded");
        btnText.innerHTML = "Read less";
    }
}

//image upload in network modal
var uploadButton = document.querySelector(".upload-button");
var fileInput = document.getElementById("image-input");
var selectedFileName = document.getElementById("selected-file-name");
var imagePreview = document.getElementById("image-preview");

uploadButton.addEventListener("click", function () {
    fileInput.click();
});

fileInput.addEventListener("change", function () {
    var file = this.files[0];

    // Update the label text with the selected file name
    selectedFileName.textContent = file ? file.name : "No file selected";

    if (file) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var image = document.createElement("img");
            image.src = e.target.result;
            imagePreview.innerHTML = "";
            imagePreview.appendChild(image);
        };

        reader.readAsDataURL(file);
    } else {
        imagePreview.innerHTML = "";
    }
});

//contact form validation
function removeValidationError(elementId) {
    document.getElementById(elementId).classList.remove("is-invalid");
    document.getElementById(elementId + "Error").textContent = "";
}

function validateForm() {
    var name = document.forms["myForm"]["fname"].value;
    var email = document.forms["myForm"]["femail"].value;
    var social = document.forms["myForm"]["fsocial"].value;
    var subject = document.forms["myForm"]["fsubject"].value;
    var message = document.forms["myForm"]["fmessage"].value;
    var isValid = true;

    if (name.trim() === "") {
        document.getElementById("inputName4").classList.add("is-invalid");
        document.getElementById("inputName4Error").textContent =
            "Please enter your name";
        isValid = false;
    } else {
        document.getElementById("inputName4").classList.remove("is-invalid");
        document.getElementById("inputName4Error").textContent = "";
    }

    if (email.trim() === "") {
        document.getElementById("inputEmail4").classList.add("is-invalid");
        document.getElementById("inputEmail4Error").textContent =
            "Please enter your email";
        isValid = false;
    } else if (!isValidEmail(email)) {
        document.getElementById("inputEmail4").classList.add("is-invalid");
        document.getElementById("inputEmail4Error").textContent =
            "Please enter a valid email";
        isValid = false;
    } else {
        document.getElementById("inputEmail4").classList.remove("is-invalid");
        document.getElementById("inputEmail4Error").textContent = "";
    }

    if (social.trim() === "") {
        document.getElementById("inputSocialAdd").classList.add("is-invalid");
        document.getElementById("inputSocialAddError").textContent =
            "Please enter your Skype/Telegram";
        isValid = false;
    } else {
        document
            .getElementById("inputSocialAdd")
            .classList.remove("is-invalid");
        document.getElementById("inputSocialAddError").textContent = "";
    }

    if (subject.trim() === "") {
        document.getElementById("inputSubject").classList.add("is-invalid");
        document.getElementById("inputSubjectError").textContent =
            "Please enter a subject";
        isValid = false;
    } else {
        document.getElementById("inputSubject").classList.remove("is-invalid");
        document.getElementById("inputSubjectError").textContent = "";
    }

    if (message.trim() === "") {
        document.getElementById("exampleMessage").classList.add("is-invalid");
        document.getElementById("exampleMessageError").textContent =
            "Please enter a message";
        isValid = false;
    } else {
        document
            .getElementById("exampleMessage")
            .classList.remove("is-invalid");
        document.getElementById("exampleMessageError").textContent = "";
    }

    return isValid;
}

function isValidEmail(email) {
    // Email validation logic
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

//network page review modal validation
function validateModalForm() {
    var name = document.getElementById("inputName").value;
    var email = document.getElementById("inputEmail").value;
    var rating = document.querySelector('input[name="rating"]:checked');
    var ratingDetails = document.querySelectorAll(
        'input[name^="rate"]:checked'
    );
    var review = document.getElementById("Textarea1").value;
    var isValid = true;

    // Remove previous error messages
    removeValidationModalError("inputName");
    removeValidationModalError("inputEmail");
    removeValidationModalError("rating");
    removeValidationModalError("ratingDetails");
    removeValidationModalError("review");

    // Validate Name field
    if (name.trim() === "") {
        displayValidationModalError("inputName", "Please enter your name");
        isValid = false;
    }

    // Validate Email field
    if (email.trim() === "") {
        displayValidationModalError("inputEmail", "Please enter your email");
        isValid = false;
    } else if (!isValidEmail(email)) {
        displayValidationModalError("inputEmail", "Please enter a valid email");
        isValid = false;
    }

    // Validate Rating field
    if (rating === null) {
        displayValidationModalError("rating", "Please select a rating");
        isValid = false;
    }

    // Validate Rating Details field
    if (ratingDetails.length === 0) {
        displayValidationModalError(
            "ratingDetails",
            "Please select ratings for all categories"
        );
        isValid = false;
    }

    // Validate Review field
    if (review.trim() === "") {
        displayValidationModalError("review", "Please enter your review");
        isValid = false;
    }

    return isValid;
}

function removeValidationModalError(elementId) {
    var errorElement = document.getElementById(elementId + "Error");
    errorElement.textContent = "";
}

function displayValidationModalError(elementId, errorMessage) {
    var errorElement = document.getElementById(elementId + "Error");
    errorElement.textContent = errorMessage;
}

function isValidEmail(email) {
    // Email validation logic
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

//   for backend start from hare
// nave tab like network categories
function redirectToURL(selectedOption) {
    $("#searchForm").submit();
    // Set the selected option as the value of the select box
}
