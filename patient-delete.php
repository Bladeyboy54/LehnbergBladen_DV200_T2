<?php
    include 'db.php';

    $patient_id = $_GET['patient_id'];

    $sql = "DELETE FROM patients WHERE patient_id = $patient_id";

    $conn->query($sql);
    $conn->close();
    header("location: patients.php");
?>