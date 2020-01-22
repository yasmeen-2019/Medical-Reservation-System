<?php
include("includes/public_header.php");

?>

    
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">The most valuable thing is your Health</h1>
            <p>We care about your health Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
           <?php
           $query  = "SELECT * From category";
           $result = mysqli_query($conn,$query);
           while ($row=mysqli_fetch_assoc($result)){ 
             echo" <div class='nav flex-column nav-pills'>
             <a class='nav-link px-4'   href='index.php?cat_id={$row['cat_id']}'><span class='{$row['cat_icon']}'> &nbsp; {$row['cat_name']}</a></div>";
           }
           ?>
          </div>

          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            <div class="tab-content pl-md-5" id="v-pills-tabContent">
              <?php
              if (isset($_GET['cat_id'])) {
              $query1 = "SELECT * FROM category WHERE cat_id={$_GET['cat_id']}";
              $result1 = mysqli_query($conn,$query1);
              $row1 = mysqli_fetch_assoc($result1);

               echo"<div class='tab-pane fade show active py-5' id='v-pills-master' role='tabpanel' aria-labelledby='v-pills-master-tab'>";
                   echo "<span class='{$row1['cat_icon']}' style='font-size:100px'></span>
               <h2 class='mb-4'>{$row1['cat_name']}</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
               <p>{$row1['cat_text']}</p>
               <p><a href='single_details.php?cat_id={$row1['cat_id']}' class='btn btn-primary'>Learn More</a></p>
               </div>";
               }else{
              $query1 = "SELECT * FROM category WHERE cat_id=10";
              $result1 = mysqli_query($conn,$query1);
              $row1 = mysqli_fetch_assoc($result1);
               echo"<div class='tab-pane fade show active py-5' id='v-pills-master' role='tabpanel' aria-labelledby='v-pills-master-tab'>";
                   echo "<span class='{$row1['cat_icon']}' style='font-size:100px'></span>
               <h2 class='mb-4'>{$row1['cat_name']}</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
               <p>{$row1['cat_text']}</p>
               <p><a href='single_details.php?cat_id={$row1['cat_id']}' class='btn btn-primary'>Learn More</a></p>
               </div>";
             }
             ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2 img mt-5 " style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Laboratory Services</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>General Treatment</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>24/7 Help &amp; Support</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section text-center">
     <?php
     $query2="SELECT * from category";
     $result2 = mysqli_query($conn,$query2);
     echo "<a href='index.php' class='btn btn-primary' class='mt-5' id='btn'>all doctor</a>";
     while ($row = mysqli_fetch_assoc($result2)) {
       echo "<a href='index.php?cat_id={$row['cat_id']}' class='btn btn-primary' class='mt-5' id='btn'>{$row['cat_name']}</a>";
     }
     echo "<br>";
     ?>   
     <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Experienced Doctors</h2>
        </div>
      </div>
      <div class="row">
        <?php
        if (isset($_GET['cat_id'])) {
          $query  = "SELECT * FROM doctors WHERE cat_id={$_GET['cat_id']}";
          $result = mysqli_query($conn,$query);
          while ($row = mysqli_fetch_assoc($result)) {

            echo "  <div class='col-md-6 col-lg-3 ftco-animate'>
            <div class='block-2'>
            <div class='flipper'>
            <div class='front' style='background-image: url(admin/upload/{$row['doctor_image']});'>
            <div class='box'>
            <h2>{$row['doctor_name']}</h2>
            </div>
            </div>
            <div class='back text-center'>
            <!-- back content -->
            <blockquote class='mt-5'><span>Work Time:<br></span>{$row['doctor_time']}<br></span></blockquote>
            </blockquote>
            <blockquote><span>Location:<br></span>{$row['doctor_location']}<br></span> </blockquote>
            <blockquote><span>Phone:<br></span>{$row['doctor_phone']}<br></span> </blockquote>
            <blockquote ><span>Price:<br></span>{$row['doctor_price']}<br></span> </blockquote>

            <div class='author d-flex'>
            <div class='image mr-3 align-self-center'>
            <div class='img' style='background-image: url(admin/upload/{$row['doctor_image']});'></div>
            </div>";
            if (!isset($_SESSION['patient_id'])){
              echo "<span class='position'><a href='public_login.php' class='btn btn-primary' >Book Now</a></span>";

            }
            else{
              echo "<div class='name align-self-center'>{$row['doctor_name']}<span class='position'><a href='appointment.php?doctor_id={$row['doctor_id']}' class='btn btn-primary'>Book Now</a></span>
              </div>";
            }

            echo "</div>
            </div>
            </div>
            </div> <!-- .flip-container -->
            </div>";
          }}
          else{

            $query  = "SELECT * FROM doctors";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {

              echo "  <div class='col-md-6 col-lg-3 ftco-animate'>
              <div class='block-2'>
              <div class='flipper'>
              <div class='front' style='background-image: url(admin/upload/{$row['doctor_image']});'>
              <div class='box'>
              <h2>{$row['doctor_name']}</h2>
             
              </div>
              </div>
              <div class='back text-center'>
              <!-- back content -->
              <blockquote class='mt-5'><span>Work Time:<br></span>{$row['doctor_time']}<br></span></blockquote>
              </blockquote>
              <blockquote><span>Location:<br></span>{$row['doctor_location']}<br></span> </blockquote>
              <blockquote><span>Phone:<br></span>{$row['doctor_phone']}<br></span> </blockquote>
              <blockquote ><span>Price:<br></span>{$row['doctor_price']}<br></span> </blockquote>

              <div class='author d-flex'>
              <div class='image mr-3 align-self-center'>
              <div class='img' style='background-image: url(admin/upload/{$row['doctor_image']});'></div>
              </div>";
              if (!isset($_SESSION['patient_id'])){
                echo "<span class='position'><a href='public_login.php' class='btn btn-primary' >Book Now</a></span>";

              }
              else{
                echo "<div class='name align-self-center'>{$row['doctor_name']}<span class='position'><a href='appointment.php?doctor_id={$row['doctor_id']}' class='btn btn-primary'>Book Now</a></span>
                </div>";
              }

              echo "</div>
              </div>
              </div>
              </div> <!-- .flip-container -->
              </div>";
            }

          }
          ?>
        </div>
      </div>
    </section>
   
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">Far far away, behind the word mountains, far from the countries</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Hospital</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Clinics</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Reviews</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

  
    
		
		<section class="ftco-section-parallax mt-5" >
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