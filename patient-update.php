<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'db.php';

    $patient_id = $_POST['patient_id'];
    $profile_img = $_POST['profile_img'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $medical_aid_no = $_POST['medical_aid_no'];

    $sql = "update patients set profile_img='$profile_img', name='$name', surname='$surname', age='$age', gender='$gender', email='$email', phone='$phone', medical_aid_no='$medical_aid_no' where patient_id=$patient_id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: patients.php");
?>