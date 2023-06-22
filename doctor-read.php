<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


    include 'db.php';

    $sql = "SELECT * FROM doctors";
    $result = $conn->query($sql);
    $doctorId = isset($_GET['doctor_id']) ? (int)$_GET['doctor_id'] : 0;

    while ($row = $result->fetch_assoc()) {  
        echo '<tr>';
        if ($row['doctor_id'] === $doctorId) {
            echo '<form class="form-inline m-2" action="doctor-update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="profile_img" value="'.$row['profile_img'].'"></td>';
            echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
            echo '<td><input type="number" class="form-control" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
            echo '<td><input type="password" class="form-control password" name="password" value="'.$row['password'].'"></td>';
            echo '<td><input type="text" class="form-control" name="phone" value="'.$row['phone'].'"></td>';
            echo '<td><input type="text" class="form-control" name="specialization" value="'.$row['specialization'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="doctor_id" value="'.$row['doctor_id'].'">';
            echo '</form>';
        }else{
            echo '<td><img src="' . $row['profile_img'] . '" alt="Profile Image" class="profile-image"></td>';
            echo '<td>' . $row['doctor_id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['surname'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['gender'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            // echo '<td>' . $row['password'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['specialization'] . '</td>';
            echo '<td><a class="btn btn-primary" href="doctors.php?doctor_id=' . $row['doctor_id'] . '" role="button">Update</a></td>'; 
        }
        echo '<td><a class="btn btn-danger" href="doctor-delete.php?doctor_id=' . $row['doctor_id'] . '" role="button">Delete</a></td>';
        echo '</tr>';
    }

    $conn->close();
?>