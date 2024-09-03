<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data and store it in session variables
        $row = $result->fetch_assoc();
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email']; // Store user's email in session
        $_SESSION['password'] = $row['password']; // Store user's password in session

        // Redirect to welcome page after successful login
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
}

$conn->close();
?>
