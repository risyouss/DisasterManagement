<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];
    $able_to_move = $_POST['able_to_move'];

    $sql = "INSERT INTO disaster_reports (name, age, blood_group, able_to_move) VALUES ('$name', $age, '$blood_group', $able_to_move)";

    if ($conn->query($sql) === TRUE) {
        echo "Report submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>