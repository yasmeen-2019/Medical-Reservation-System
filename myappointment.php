<?php

include("includes/public_header.php");

?>
<body class="animsition " style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;" >
<div class="hero-wrap" style="margin-top:200px;" >

  
    <div class="container">
    <div class="card o-hidden border-0 shadow-lg">
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">reservation date</th>
      <th scope="col">reservation time</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
     <?php
       $query  = "SELECT * FROM reservation WHERE patient_id={$_SESSION['patient_id']}";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo"<td>{$row['reservation_id']}</td>";
     echo" <td>{$row['fullname']}</td>";
      echo"<td>{$row['email']}</td>";
     echo" <td>{$row['pass']}</td>";
     echo" <td>{$row['age']}</td>";
     echo" <td>{$row['gender']}</td>";
     echo" <td>{$row['phone']}</td>";
     echo" <td>{$row['reservation_date']}</td>";
     echo" <td>{$row['reservation_time']}</td>";
     echo" <td><a href='update_appointment.php?reservation_id={$row['reservation_id']}'><img src='admin/img/edit.png' height='60px' width='60px' title='edit'></a></td>";
     echo" <td><a href='delete_appointment.php?reservation_id={$row['reservation_id']}'><img src='admin/img/delete.png' height='60px' width='60px' title='delete'></a></td>";
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
</div>
  </body>

  </html>

  <?php
  include("includes/public_footer.php");
  ?>