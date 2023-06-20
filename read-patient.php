<?php

include 'db.php';

$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error fetching patient data: ' . mysqli_error($conn));
}

// Generate table rows with patient data
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td><img src="' . $row['profile_img'] . '" alt="Profile Image"></td>';
    echo '<td>' . $row['patient_id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['surname'] . '</td>';
    echo '<td>' . $row['age'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '<td>' . $row['medical_aid_no'] . '</td>';
    echo '</tr>';
}

// Close the database connection
mysqli_close($conn);
?>
