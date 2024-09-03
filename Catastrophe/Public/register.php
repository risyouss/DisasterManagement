<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";
    

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['Name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $state = $_POST['country-state'];
        $phone = $_POST['phno'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO subscribers (name, email, address, state, phone , password) VALUES ('$name', '$email', '$address', '$state', '$phone' , $password)";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABONNEZ-VOUS POUR LES ALERTES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: right 8px top 50%;
            background-size: 24px;
            padding-right: 30px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        button[type="submit"]:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <h1>ABONNEZ-VOUS POUR LES ALERTES</h1>
    
    <form method="post" action="register.php">
        <label for="Name">Nom:</label>
        <input type="text" name="Name" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>

        <label for="address">Addresse:</label>
        <input type="text" name="address" required>
        <br>

        <label for="country-state">Selectionnez le pays:</label>
        <select id="country-state" name="country-state">
            <!-- Include your state options here -->
            <option value="state1">pays 1 </option>
            <option value="state2">pays 2</option>
            <!-- Add more options as needed -->
        </select>
        <br>

        <label for="phno">Numéro de téléphone:</label>
        <input type="text" name="phno" required>
        <br>

        <label for="password">Mots de pass</label>
        <input type="text" name="password" required>
        <br>

        <button type="submit">S'abonner</button>
    </form>
    <footer class="footer">
    </footer>
</body>
</html>
