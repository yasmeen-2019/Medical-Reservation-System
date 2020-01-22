<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

	if (isset($_POST['update'])) {
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$name     = $_POST['name'];

		$image   = $_FILES['image']['name'];
		$tmp_img = $_FILES['image']['tmp_name'];
		$path    = "upload/";

		move_uploaded_file($tmp_img, $path.$image);

		if ($_FILES['image']['error']==0) {
			$query = "UPDATE admin SET admin_name='$name' , admin_email='$email', admin_password='$password' ,  admin_image='$image' WHERE admin_id = {$_GET['admin_id']}";
		}else{
			$query = "UPDATE admin SET admin_name='$name' , admin_email='$email' , admin_password='$password'   WHERE admin_id={_GET['admin_id']} ";
		}
		
		//preform query
		mysqli_query($conn,$query);
		echo "<script> window.top.location='manage_admin.php' </script>";
	}
	
	//fetch old data 
	$query  = "SELECT * FROM admin WHERE admin_id={$_GET['admin_id']}";
	$result = mysqli_query($conn,$query);
	$row    = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center mt-5">
            <img src="img/boy.png">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Admin!</h1>
              </div>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"  name="name" value="<?php echo $row['admin_name'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail"  name="email" value="<?php echo $row['admin_email'] ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" value="<?php echo $row['admin_password'] ?>">
                </div>
                <div class="form-group">
                  <input type="file" id="exampleInputPassword" name="image" value="<?php echo $row['admin_image'] ?>">
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                   <button id="payment-button" type="submit" name="update" class="btn btn-lg btn-info btn-block">
                      <span id="payment-button-amount">Update</span> 
                  </button>
                  </div>
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>