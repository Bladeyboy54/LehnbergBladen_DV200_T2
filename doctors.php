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
            <a class="nav-link" href="dashboard.php">Appointments</a>
            <a class="nav-link" href="patients.php">Patients</a>
            <a class="nav-link active" href="doctors.php">Doctors</a>
          </nav>
          <div class="logo">
            <img src="Img/61ae-mRACmL._SL1500_-PhotoRoom 2.png" alt="logo">
          </div>
        </div>
      </div>
      <div class="col-md-10">
          <h1>DOCTORS</h1>
          <table class="table patient-table col-md-12 table-dark">
            <thead class="thead table-head">
                <tr class="justify-content-between">
                    <th>Profile Image</th>
                    <th>Doctor ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Specialization</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
              <?php include 'doctor-read.php'; ?>
            </tbody>
          </table>
          <div class="card-form" id="createDoctorCard">
            <div class="card card-body col-md-12">
              <form class="form-body form-inline m-2" action="doctor-create.php" method="POST">
                <div class="form-group">
                  <label for="profile_img">Profile Image:</label>
                  <input type="text" class="form-control" id="profile_img" name="profile_img">
                </div>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="surname">Surname:</label>
                  <input type="text" class="form-control" id="surname" name="surname" required>
                </div>
                <div class="form-group">
                  <label for="age">Age:</label>
                  <input type="number" class="form-control" id="age" name="age" required>
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <input type="text" class="form-control" id="gender" name="gender">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control password" id="password" name="password">
                </div>
                <div class="form-group">
                  <label for="phone">Phone No.:</label>
                  <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                  <label for="medical_aid_no">Specialization:</label>
                  <input type="text" class="form-control" id="specialization" name="specialization">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>