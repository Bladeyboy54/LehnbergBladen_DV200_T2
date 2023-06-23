<?php

    include 'db.php';

    $appointment_id = $_POST['appointment_id'];
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_time = $_POST['appointment_time'];
    $room = $_POST['room'];

    $sql = "INSERT INTO appointments (appointment_id, patient_id, doctor_id, appointment_time, room) VALUES ('$appointment_id', '$patient_id', '$doctor_id', '$appointment_time', '$room')";

    $conn->query($sql);
    $conn->close();
    header("location: dashboard.php");
?>