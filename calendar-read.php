<?php

include 'db.php';

$query = "SELECT appointment_id, patient_id, doctor_id, appointment_time, room FROM appointments";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}

$appointmentsByDay = array(
    'Monday' => array(),
    'Tuesday' => array(),
    'Wednesday' => array(),
    'Thursday' => array(),
    'Friday' => array(),
    'Saturday' => array(),
    'Sunday' => array()
);
while ($row = mysqli_fetch_assoc($result)) {
    $appointmentId = $row['appointment_id'];
    $patientId = $row['patient_id'];
    $doctorId = $row['doctor_id'];
    $appointmentTime = $row['appointment_time'];
    $dayOfWeek = date('l', strtotime($appointmentTime));

    $appointmentsByDay[$dayOfWeek][] = array(
        'appointmentId' => $appointmentId,
        'patientId' => $patientId,
        'doctorId' => $doctorId,
        'appointmentTime' => $appointmentTime
    );
}

mysqli_close($conn);
?>

<tr>
  <?php
  foreach ($appointmentsByDay as $day => $appointments) {
      echo "<td>";
      foreach ($appointments as $appointment) {
          echo "Appointment ID: " . $appointment['appointmentId'] . "<br>";
          echo "Patient ID: " . $appointment['patientId'] . "<br>";
          echo "Doctor ID: " . $appointment['doctorId'] . "<br>";
          echo "Appointment Time: " . $appointment['appointmentTime'] . "<br>";

          echo "<form action='appointment-delete.php' method='POST'>";
          echo "<input type='hidden' name='appointment_id' value='" . $appointment['appointmentId'] . "'>";
          echo "<button class='btn btn-danger' type='submit'>Delete</button>";
          echo "</form>";
          
          echo "<br>";
      }
      echo "</td>";
  }
  ?>
</tr>