<?php
    include 'db.php';

    if (isset($_POST['appointment_id'])) {
        $appointmentId = $_POST['appointment_id'];
    
        // Delete the appointment from the database
        $query = "DELETE FROM appointments WHERE appointment_id = '$appointmentId'";
        $result = mysqli_query($conn, $query);
    
    } else {
        echo "Invalid appointment ID.";
    }

    mysqli_close($conn);
    header("location: dashboard.php")
?>