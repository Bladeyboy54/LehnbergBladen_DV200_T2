<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" 
        content="IE=edge">
  <meta name="viewport" 
        content="width=device-width, initial-scale=1.0">
  <meta studentName="Bladen Lehnberg"
        studentNumber="221146"
        class="DV200_T2"
        lecturer="Tsungai Katsuro">
  <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
  <link rel="stylesheet"
        href="dashboard.css">

  <title>Dashboard</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="vertical-nav">
          <nav class="nav nav-pills flex-column">
            <a class="nav-link">Hello, <?php echo $_SESSION['name']; ?></a>
            <a class="nav-link active" href="dashboard.php">Appointments</a>
            <a class="nav-link" href="patients.php">Patients</a>
            <a class="nav-link" href="doctors.php">Doctors</a>
            <a class="nav-link" href="logout.php"><button type="submit" class="btn button btn-primary">Log Off</button></a>
          </nav>
          <div class="logo">
            <img src="Img/61ae-mRACmL._SL1500_-PhotoRoom 2.png" alt="logo">
          </div>
        </div>
      </div>
      <div class="col-md-10">
          <h1>APPOINTMENTS</h1>
        
        <div id="form-container" class="form-container">
          <form action="appointment-create.php" method="POST">
            <input type="text" name="appointment_id" id="appointment_id" placeholder="Appointment">
            <input type="text" name="patient_id" id="patient_id" placeholder="Patient">
            <input type="text" name="doctor_id" id="doctor_id" placeholder="Doctor">
            <input type="text" name="appointment_time" id="appointment_time" placeholder="Time">
            <input type="text" name="room" id="room" placeholder="Room No.">
            <input type="submit" class="button btn-primary" value="Submit">
          </form>
        </div>
        <br>
        <div class="calendar">
          <h2 id="calendar-title">
            This week
          </h2>
          <div id="calendar">
            <table class="table appointment-table col-md-12 table-dark">
              <thead class="thead table-head">
                <tr class="justify-content-between">
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                  <th>Saturday</th>
                  <th>Sunday</th>
                </tr>
              </thead>
              <tbody>
                <?php include 'calendar-read.php'; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <script src="calendar.js"></script> -->
      </div>
    </div>
  </div>
  <!-- <script>
    function toggleForm() {
      var formContainer = document.getElementById('form-container');
      formContainer.style.display = formContainer.style.display === 'none' ? 'block' : 'none';
    }
  </script> -->
</body>
</html>

<?php
}else{
  header("location: index.php");
  exit();
}
?>