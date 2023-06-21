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

  <title>Document</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="vertical-nav">
          <nav class="nav nav-pills flex-column">
            <a class="nav-link active" href="dashboard.php">Appointments</a>
            <a class="nav-link" href="patients.php">Patients</a>
            <a class="nav-link" href="doctors.php">Doctors</a>
          </nav>
          <div class="logo">
            <img src="Img/61ae-mRACmL._SL1500_-PhotoRoom 2.png" alt="logo">
          </div>
        </div>
      </div>
      <div class="col-md-10">
          <h1>APPOINTMENTS</h1>
        <div class="add-appointment">
          <button class="add-button" onclick="toggleForm()">+</button>
          <div id="form-container" class="form-container">
            <form action="process.php" method="POST">
              <input type="text" name="patient" placeholder="Patient">
              <input type="text" name="doctor" placeholder="Doctor">
              <input type="text" name="date" placeholder="Date">
              <input type="text" name="time" placeholder="Time">
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        <div class="calendar">
          <h2 id="calendar-title"></h2>
          <div id="calendar"></div>
        </div>
        <script src="calendar.js"></script>
      </div>
    </div>
  </div>
  <script>
    function toggleForm() {
      var formContainer = document.getElementById('form-container');
      formContainer.style.display = formContainer.style.display === 'none' ? 'block' : 'none';
    }
  </script>
</body>
</html>