<?php

include 'db.php';

$query = "SELECT appointment_id, patient_id, doctor_id, appointment_time FROM appointments";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}

// Step 3: Display the appointment data
while ($row = mysqli_fetch_assoc($result)) {
    $appointmentId = $row['appointment_id'];
    $patientId = $row['patient_id'];
    $doctorId = $row['doctor_id'];
    $appointmentTime = $row['appointment_time'];

    // Do something with the fetched data
    echo "Appointment ID: " . $appointmentId . "<br>";
    echo "Patient ID: " . $patientId . "<br>";
    echo "Doctor ID: " . $doctorId . "<br>";
    echo "Appointment Time: " . $appointmentTime . "<br>";
}

// Step 4: Close the database connection
mysqli_close($conn);
?>