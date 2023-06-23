<?php

session_start();

include 'db.php';

if (isset($_POST['email']) && isset($_POST['email'])) {

  function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $email = validate($_POST['email']);
  $pass = validate($_POST['password']);

  if (empty($email)) {
    header("location: index.php?error=! User Name is Required");
    exit();

  }else if(empty($pass)) {
    header("location: index.php?error=! Password is Required");
    exit();
    
  }else{
    $sql = "SELECT * FROM receptionist where email='$email' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] === $email && $row['password'] === $pass) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['rank'] = $row['rank'];
        header("location: dashboard.php");
        exit();
      }else{
        header("location: index.php?error=! Incorrect email or password");
        exit();
      }  

    }else{
      header("location: index.php?error=! Incorrect email or password");
      exit();
    }
  }

}else{
  header("location: index.php");
  exit();
}
?>