   <?php

   include("includes/public_header.php");


   if (isset($_POST['update'])) {
   	$fullname   = $_POST['fullname'];
   	$email      = $_POST['email'];
   	$password   = $_POST['password'];
   	$gender     = $_POST['gender'];
   	$age        = $_POST['age'];
   	$phone      = $_POST['phone'];
   	$time       = $_POST['time'];
   	$date       = $_POST['date'];
   	/*$patient_id = $_SESSION['patient_id'];*/
   /*	$doctor_id  = $_GET['doctor_id'];*/

   	$query = "UPDATE reservation SET fullname='$fullname' , email='$email', pass='$password' , gender='$gender',age='$age',phone='$phone',reservation_time='$time',reservation_date='$date' WHERE reservation_id = {$_GET['reservation_id']}";

		//preform query
   	mysqli_query($conn,$query);
   /* echo $query;
    die;*/
   	echo "<script> window.top.location='myappointment.php' </script>";
   }

	//fetch old data 
   $query  = "SELECT * FROM reservation WHERE reservation_id={$_GET['reservation_id']}";
   $result = mysqli_query($conn,$query);
   $row    = mysqli_fetch_assoc($result);
   ?>  


<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center mt-5">
            <img src="images/up.jpg" width="500px" height="500px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit your Appointment</h1>
              </div>
             <form class='user' method='post'>
                      <div class='form-group'>
                        <input type='text' class='form-control form-control-user' value="<?php echo $row['fullname'] ?>" name='fullname'>
                      </div>
                      <div class='form-group'>
                        <input type='email' class='form-control form-control-user' aria-describedby='emailHelp'   value="<?php echo $row['email'] ?>" name='email'>
                      </div>
                      <div class='form-group'>
                        <input type='password' class='form-control form-control-user' value="<?php echo $row['pass'] ?>" name='password'>
                      </div>
                      <div class='form-group'>
                        <input type='text' class='form-control form-control-user'  value="<?php echo $row['phone'] ?>" name='phone'>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  value="<?php echo $row['age'] ?>" name="age">
                          </div>    
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  value="<?php echo $row['gender'] ?>" name="gender">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="date" class="form-control"  value="<?php echo $row['reservation_date'] ?>" name="date">
                          </div>    
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="time" class="form-control" value="<?php echo $row['reservation_time'] ?>" name="time">
                          </div>
                        </div>
                      </div>
                      <button class='btn btn-primary btn-user btn-block' name='update'>Update</button>
                      <button class='btn btn-danger btn-user btn-block' name='delete'>Delete</button>
                    </form>
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