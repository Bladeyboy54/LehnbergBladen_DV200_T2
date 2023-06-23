<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'db.php';

    $profile_img = $_POST['profile_img'];
    $doctor_id = $_POST['doctor_id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialization = $_POST['specialization'];

    $sql = "update doctors set profile_img='$profile_img', name='$name', surname='$surname', age='$age', gender='$gender', email='$email', phone='$phone', specialization='$specialization' where doctor_id=$doctor_id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: doctors.php");
?>