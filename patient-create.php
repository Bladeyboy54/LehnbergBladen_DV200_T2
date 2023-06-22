<?php

    include 'db.php';

    $profile_img = $_POST['profile_img'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $medical_aid_no = $_POST['medical_aid_no'];

    $sql = "INSERT INTO patients (profile_img, name, surname, age, gender, email, phone, medical_aid_no) VALUES ('$profile_img', '$name', '$surname', '$age', '$gender', '$email', '$phone', '$medical_aid_no')";

    $conn->query($sql);
    $conn->close();
    header("location: patients.php");
?>