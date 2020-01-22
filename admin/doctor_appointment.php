<?php

include("../includes/dashboard_header.php");
include("../includes/connection.php");
?>
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">

  <body class="animsition">
    <div class="container">
    <div class="card o-hidden border-0 shadow-lg">
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">reservation date</th>
      <th scope="col">reservation time</th>
     
    </tr>
  </thead>
  <tbody>
      <?php
       $query  = "SELECT * FROM reservation WHERE doctor_id={$_SESSION['doctor_id']}";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo"<td>{$row['reservation_id']}</td>";
     echo" <td>{$row['fullname']}</td>";
      echo"<td>{$row['email']}</td>";
     echo" <td>{$row['age']}</td>";
     echo" <td>{$row['gender']}</td>";
     echo" <td>{$row['phone']}</td>";
     echo" <td>{$row['reservation_date']}</td>";
     echo" <td>{$row['reservation_time']}</td>";
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

