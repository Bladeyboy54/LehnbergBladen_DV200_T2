<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Perform input validation and login process

  $sql = "SELECT email, Password FROM receptionist WHERE Email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];

    if (password_verify($password, $storedPassword)) {
      // Password is correct, set up user session
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['email'] = $row['email'];

      // Redirect to the dashboard or another page
      header("Location: dashboard.php");
      exit;
    } else {
      // Invalid password
      echo "Invalid password!";
    }
  } else {
    // Invalid email
    echo "Invalid email!";
  }

  $stmt->close();
}

$conn->close();

?>