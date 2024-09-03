<?php
// Include database connection code or use your existing connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   

    // Check if the user exists in the database
    $sql = "SELECT * FROM subscribers WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Correct password!";
            session_start();
            $_SESSION['user_id'] = $row['id'];
            header("Location: ");
            exit();
        }  
        else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    
    <form method="post" action="login.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form>

    <footer class="footer">
    </footer>
</body>
</html>
