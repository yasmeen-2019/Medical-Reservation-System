<?php
include("includes/connection.php");
session_start();

          if (isset($_POST['register'])) {
                    $fname    = $_POST['fname'];
                    $email    = $_POST['email'];
                    $password = $_POST['password'];
                    $gender   = $_POST['gender'];
                    $age      = $_POST['age'];
                  
                
                $query1   = "INSERT INTO patient(patient_name,patient_email,patient_password,patient_gender,patient_age) values ('$fname','$email', '$password','$gender','$age')";
                 $result1 = mysqli_query($conn,$query1);
                 $row1    =mysqli_fetch_assoc($result1);

                   echo '<script>window.top.location="public_login.php"</script>';
                   exit;
                 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register Now!</h1>
                  </div>
                  

                <form class='user' method='post'>
                    <div class='form-group'>
                      <input type='text' class='form-control form-control-user' id='exampleInputPassword' placeholder='Full name..' name='fname'>
                    </div>
                    <div class='form-group'>
                      <input type='email' class='form-control form-control-user' id='exampleInputEmail' aria-describedby='emailHelp' placeholder='Enter Email Address...' name='email'>
                    </div>
                    <div class='form-group'>
                      <input type='password' class='form-control form-control-user' id='exampleInputPassword' placeholder='Password..' name='password'>
                    </div>
                    <div class='form-group'>
                      <input type='text' class='form-control form-control-user' id='exampleInputPassword' placeholder='gender' name='gender'>
                    </div>
                    <div class='form-group'>
                      <input type='text' class='form-control form-control-user' id='exampleInputPassword' placeholder='age..' name='age'>
                    </div>
                    <button class='btn btn-primary btn-user btn-block' name='register'>register</button>
                     
                  </form>
                 
                  <hr>
                </div>
              </div>
               <?php
                if (isset($_POST['login'])) {
                    $email    = $_POST['email'];
                    $password = $_POST['password'];
                   if (!empty($email) && !empty($password)){
                       $query  ="SELECT * FROM patient WHERE patient_email='$email' AND patient_password='$password'";
                       $result = mysqli_query($conn,$query);
                       $row    = mysqli_fetch_assoc($result);

                       if ($row['patient_id']) {
                           $_SESSION['patient_id'] = $row['patient_id'];
                             echo $_SESSION['patient_id'];
                           echo '<script>window.top.location="index.php"</script>';
                       }else{
                             $error = "Email or Password is incorrect";
                           }
                   }
                }

                ?>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Now!</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                      <?php
                        if (isset($error)) {
                            echo "<div class ='alert alert-danger'>$error</div>";
                        }
                        ?>
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" name="login" type="submit">
                      Login
                    </button>
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
