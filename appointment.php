<?php

include("includes/public_header.php");

if (isset($_POST['book'])) {
  $fullname   = $_POST['fullname'];
  $email      = $_POST['email'];
  $password   = $_POST['password'];
  $gender     = $_POST['gender'];
  $age        = $_POST['age'];
  $phone      = $_POST['phone'];
  $time       = $_POST['time'];
  $date       = $_POST['date'];
  $patient_id = $_SESSION['patient_id'];
  $doctor_id  = $_GET['doctor_id'];

  
  $query = "INSERT INTO reservation (fullname,email,pass,age,gender,phone,reservation_date,reservation_time,patient_id,doctor_id) values ('$fullname','$email','$password','$age','$gender','$phone','$date','$time','$patient_id','$doctor_id')";

  mysqli_query($conn,$query);
/*echo $query;
die;*/
  echo '<script>window.top.location="appointment.php"</script>';
  exit;

}

?>
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">

  <body class="animsition">

    <div class="page-wrapper">

      <!-- Outer Row -->
      <div class="page-content--bge5">
        <div class="container">
          <div class="login-wrap">
            <div class="login-content">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Make an Appointment!</h1>
                    </div>
                    <form class='user' method='post'>
                      <div class='form-group'>
                        <input type='text' class='form-control form-control-user' placeholder='Full name..' name='fullname'>
                      </div>
                      <div class='form-group'>
                        <input type='email' class='form-control form-control-user' aria-describedby='emailHelp' placeholder='Email Address...' name='email'>
                      </div>
                      <div class='form-group'>
                        <input type='password' class='form-control form-control-user' placeholder='Password..' name='password'>
                      </div>
                      <div class='form-group'>
                        <input type='text' class='form-control form-control-user'  placeholder='Phone..' name='phone'>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Age" name="age">
                          </div>    
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Gender" name="gender">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="date" class="form-control"  placeholder="Date" name="date">
                          </div>    
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="time" class="form-control"  placeholder="Time" name="time">
                          </div>
                        </div>
                      </div>
                      <button class='btn btn-primary btn-user btn-block' name='book'>Book Now</button>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  </body>

  </html>

  <?php
  include("includes/public_footer.php");
  ?>