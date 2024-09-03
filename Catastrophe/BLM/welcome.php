<?php
session_start();

// Check if session variables are set before accessing them
$name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .user-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .user-info p {
            margin: 10px 0;
        }

        .user-info p strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $name; ?>!</h2>
        <div class="user-info">
            <p><strong>Your email:</strong> <?php echo $email; ?></p>
            <p><strong>Your password:</strong> <?php echo $password; ?></p>
        </div>
    </div>
</body>
</html>
