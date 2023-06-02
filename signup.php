<?php

include 'db.php';

$name = $_POST['logname'];
$email = $_POST['logemail'];
$password = $_POST['logpass'];

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Handle invalid email address
    echo "Invalid email address";
    exit;
}

// Sanitize name and password
$name = filter_var($name, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);

$sql = "INSERT INTO receptionist (Full_name, Email, Password) VALUES ('$name', '$email', '$password')";

$conn->query($sql);
$conn->close();
header("Location: index.php");
exit;

?>
