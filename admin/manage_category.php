<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $text = $_POST['text'];
  $cat_icon = $_POST['cat_icon'];
  $head_doctor = $_POST['head_doctor'];
  

  //get data from file
  $image   = $_FILES['image']['name'];
  $tmp_img = $_FILES['image']['tmp_name'];
  $path    = "upload/" ;
  move_uploaded_file($tmp_img, $path.$image);

$image1   = $_FILES['image1']['name'];
  $tmp_img1 = $_FILES['image1']['tmp_name'];
  $path    = "upload/" ;
  move_uploaded_file($tmp_img1, $path.$image1);


 

  $query = "INSERT INTO category(cat_name,cat_image,cat_text,cat_icon,head_doctor,doctor_image) values('$name','$image','$text','$cat_icon','$head_doctor','$image1')";

  mysqli_query($conn,$query);
  echo "<script> window.top.location='manage_category.php' </script>";
  exit;
}
?> 


<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block text-center mt-5">
            <img src="img/couple.jpg" height="400px" width="380px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">New category!</h1>
              </div>
              <form action="#" method="post" enctype="multipart/form-data">
                
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Category Name" name="name">
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="exampleInputPassword" name="image">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="description" name="text">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="cat_icon" name="cat_icon">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="doctor_name" name="head_doctor">
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="exampleInputPassword" name="image1">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                   <button id="payment-button" type="submit" name="add" class="btn btn-primary btn-user btn-block">
                      <span id="payment-button-amount">Add</span> 
                  </button>
                  </div>
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query  = "SELECT * FROM category";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo"<td>{$row['cat_id']}</td>";
     echo" <td>{$row['cat_name']}</td>";
     echo" <td><img src='upload/{$row['cat_image']}'height=100px width=100px/></td>";
     echo" <td><a href='edit_category.php?cat_id={$row['cat_id']}'><img src='img/edit.png' height='60px' width='60px' title='edit'></a></td>";
     echo" <td><a href='delete_category.php?cat_id={$row['cat_id']}'><img src='img/delete.png' height='60px' width='60px' title='delete'></a></td>";
    echo"</tr>";
    }
    ?>
    
  </tbody>
</table>
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


