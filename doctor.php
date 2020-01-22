<?php

include("includes/public_header.php");

/*if (isset()) {
  # code...
}*/
?>

    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Doctor</span></p>
            <h1 class="mb-3 bread">Well Experienced Doctors</h1>
          </div>
        </div>
      </div>
    </div>
 <!--  <?php
$query2="SELECT * from category WHERE cat_id = {$_GET['cat_id']}";
$result2 = mysqli_query($conn,$query2);
while ($row = mysqli_fetch_assoc($result2)) {
 echo "<div class='mt-5 ml-md-5'>
  <a href='doctor.php class='btn btn-primary'>{$row['cat_name']}</a>
  </div>";
}
?>  -->
<!-- <div class='mt-5 ml-md-5'>
  <a href='doctor.php' class='btn btn-primary'>Surgical doctors</a>
  </div> -->
  
  <!-- <a href="#" class="btn btn-primary">Dental doctors</a>
  <a href="#" class="btn btn-primary">Neurological doctors</a>
  <a href="#" class="btn btn-primary">Ophthalmological doctors</a>
  <a href="#" class="btn btn-primary">Pediatrics doctors</a>
  <a href="#" class="btn btn-primary">Cardiology doctors</a>
 -->

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<?php
        	$query  = "SELECT * FROM doctors";
        	$result = mysqli_query($conn,$query);
        	while ($row = mysqli_fetch_assoc($result)) {
        
        echo "	<div class='col-md-6 col-lg-3 ftco-animate'>
	          <div class='block-2'>
	            <div class='flipper'>
	              <div class='front' style='background-image: url(admin/upload/{$row['doctor_image']});'>
	                <div class='box'>
	                  <h2>{$row['doctor_name']}</h2>
	                  <p>Neurologist</p>
	                </div>
	              </div>
	              <div class='back'>
	                <!-- back content -->
	                <blockquote>
                    <p><span>Work Time:<br></span>{$row['doctor_time']}<br></span></p>
                   <span>Location:<br></span>{$row['doctor_location']}</span><br>
                    <span>Phone:<br></span>{$row['doctor_phone']}</span><br>
	                  <span>Price:<br></span>{$row['doctor_price']}</span><br>
	                </blockquote>
	                <div class='author d-flex'>
	                  <div class='image mr-3 align-self-center'>
	                    <div class='img' style='background-image: url(admin/upload/{$row['doctor_image']});'></div>
	                  </div>
	                  <div class='name align-self-center'>{$row['doctor_name']}<span class='position'><a href='public_login.php' class='btn btn-primary' data-toggle='modal' data-target='#modalAppointment'  id='modalAppointmentLabel'>Book Now</a></span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
	        </div>";
	    }
        	?>
         	
	       
	        </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
include("includes/public_footer.php");
    ?>