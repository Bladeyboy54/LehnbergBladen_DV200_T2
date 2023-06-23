<?php

ini_set('error_reporting', E_ALL & ~E_WARNING);


    include 'db.php';

    $sql = "SELECT * FROM patients";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {  
        echo "<tr>";
        if ($row['patient_id'] === $_GET['patient_id']) {
            echo '<form class="form-inline m-2" action="patient-update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="profile_img" value="' . $row['profile_img'] . '"></td>';
            echo '<td></td>';
            echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
            echo '<td><input type="number" class="form-control" name="age" value="' . $row['age'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="email" value="' . $row['email'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="phone" value="' . $row['phone'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="medical_aid_no" value="' . $row['medical_aid_no'] . '"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="patient_id" value="' . $row['patient_id'] . '">';
            echo '</form>';
        }else{
            echo '<td><img src="' . $row['profile_img'] . '" alt="Profile Image" class="profile-image"></td>';
            echo '<td>' . $row['patient_id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['surname'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['gender'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['medical_aid_no'] . '</td>';
            echo '<td><a class="btn btn-primary" href="patients.php?patient_id=' . $row['patient_id'] . '" role="button">Update</a></td>'; 
        }
        echo '<td><a class="btn btn-danger" href="patient-delete.php?patient_id=' . $row['patient_id'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }

    $conn->close();
?>
