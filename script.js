// Track login attempts
let loginAttempt = 0;

// Function to handle form submission
function submitForm(event) {
    event.preventDefault(); // Prevent form from submitting

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");

    // Check if it's the first attempt
    if (loginAttempt === 0) {
        // Show error message on the first attempt
        errorMessage.style.display = "block";
        loginAttempt++;
    } else {
        // Simulate a successful login on the second attempt
        errorMessage.style.display = "none";
        alert("Login successful!");
        // Redirect to another page after successful login
        window.location.href = "#"; // Replace with the URL of your target page
    }
}