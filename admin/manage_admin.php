<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

if (isset($_POST['add'])) {
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  //get data from file
  $image   = $_FILES['image']['name'];
  $tmp_img = $_FILES['image']['tmp_name'];
  $path    = "upload/" ;
  move_uploaded_file($tmp_img, $path.$image);

  $query = "INSERT INTO admin(admin_name,admin_email,admin_password,admin_image) values('$name','$email','$password','$image')";
  

    mysqli_query($conn,$query);
  echo "<script> window.top.location='manage_admin.php' </script>";
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
            <img src="img/boy.png">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">New Admin!</h1>
              </div>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <input type="file" id="exampleInputPassword" name="image">
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
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query  = "SELECT * FROM admin";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo"<td>{$row['admin_id']}</td>";
     echo" <td>{$row['admin_name']}</td>";
      echo"<td>{$row['admin_email']}</td>";
     echo" <td>{$row['admin_password']}</td>";
     echo" <td><img src='upload/{$row['admin_image']}' height=100px width=100px/></td>";
     echo" <td><a href='edit_admin.php?admin_id={$row['admin_id']}'><img src='img/edit.png' height='60px' width='60px' title='edit'></a></td>";
     echo" <td><a href='delete_admin.php?admin_id={$row['admin_id']}'><img src='img/delete.png' height='60px' width='60px' title='delete'></a></td>";
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

