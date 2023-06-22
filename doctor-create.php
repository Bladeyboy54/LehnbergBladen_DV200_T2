<?php

    include 'db.php';

    $profile_img = $_POST['profile_img'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialization = $_POST['specialization'];

    $sql = "INSERT INTO doctors (profile_img, name, surname, age, gender, email, password, phone, specialization) VALUES ('$profile_img', '$name', '$surname', '$age', '$gender', '$email', '$password', '$phone', '$specialization')";

    $conn->query($sql);
    $conn->close();
    header("location: doctors.php");
?>