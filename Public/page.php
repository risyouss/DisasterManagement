<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Form</title>
</head>
<body>
    <!-- Your existing HTML form code here -->
    <h1>SUBSCRIBE FOR ALERTS</h1>
    <form>
        <!-- ... your form fields ... -->
        <button class="bouton-contact" onclick="sendEmail()">Send</button>
    </form>
    <!-- Your existing script and footer code here -->
</body>
</html>
