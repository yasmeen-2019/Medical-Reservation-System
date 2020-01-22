<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

	if (isset($_POST['update'])) {
		$name     = $_POST['name'];

		$image   = $_FILES['image']['name'];
		$tmp_img = $_FILES['image']['tmp_name'];
		$path    = "upload/";

		move_uploaded_file($tmp_img, $path.$image);

		if ($_FILES['image']['error']==0) {
			$query = "UPDATE category SET cat_name='$name' , cat_image='$image' WHERE cat_id = {$_GET['cat_id']} ";
		}else{
			$query = "UPDATE category SET cat_name='$name'  WHERE cat_id={$_GET['cat_id']} ";
		}
		
		//preform query
		mysqli_query($conn,$query);
     echo "<script> window.top.location='manage_category.php' </script>";
		
	}
	
	//fetch old data 
	$query  = "SELECT * FROM category WHERE cat_id={$_GET['cat_id']}";
	$result = mysqli_query($conn,$query);
	$row    = mysqli_fetch_assoc($result);

?>


<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center mt-3">
            <img src="img/couple.jpg" height="450px" width="400px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Category!</h1>
              </div>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"  name="name" value="<?php echo $row['cat_name'] ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <input type="file" id="exampleInputPassword" name="image" value="<?php echo $row['cat_image']?>">
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