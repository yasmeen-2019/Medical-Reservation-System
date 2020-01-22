   <?php

   include("includes/public_header.php");
if (isset($_POST['edit'])) {
  echo "<script> window.top.location='edit_patientprofile.php' </script>";
}
	//fetch old data 
   $query  = "SELECT * FROM patient WHERE patient_id={$_SESSION['patient_id']}";
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
            <img src="images/profile.jpg" width="400px" height="400px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Hello!</h1>
              </div>
             <form class='user' method='post'>
                      <div class='form-group'>
                        <input type='text' class='form-control form-control-user' placeholder='Full name..' name='fullname' value="<?php echo $row['patient_name'] ?>">
                      </div>
                      <div class='form-group'>
                        <input type='email' class='form-control form-control-user' aria-describedby='emailHelp' placeholder='Email Address...' name='email' value="<?php echo $row['patient_email'] ?>">
                      </div>
                      <div class='form-group'>
                        <input type='password' class='form-control form-control-user' placeholder='Password..' name='password' value="<?php echo $row['patient_password'] ?>">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Age" name="age" value="<?php echo $row['patient_age'] ?>">
                          </div>    
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Gender" name="gender" value="<?php echo $row['patient_gender'] ?>">
                          </div>
                        </div>
                      </div>
                      <button class='btn btn-warning btn-user btn-block' name='edit'>Edit</button>
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