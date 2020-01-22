<?php

include("includes/public_header.php");
?>

 
   
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="departments.php">Departments</a></span> <span>Department Single</span></p>
            <h1 class="mb-3 bread">Department Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
     
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <?php
    $query  = "SELECT * FROM category WHERE cat_id={$_GET['cat_id']}" ;
    $result = mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) {
          echo " <p>
              <img src='images/{$row['cat_image']}' alt='' class='img-fluid'>
            </p>
            <h2 class='mb-3'>{$row['cat_name']} Department</h2>
             <p>{$row['cat_text']}</p>";

          }

          ?>
           
            
            <div class="about-author d-flex p-4 mt-5 mb-5 bg-light">
              <div class="bio align-self-md-center mr-5">
              <?php
                $query2 ="SELECT * FROM category where cat_id={$_GET['cat_id']}";

                $result2=mysqli_query($conn,$query2);
                $row2   =mysqli_fetch_assoc($result2);
                echo "<img src='images/{$row2['doctor_image']}' alt='Image placeholder' class='img-fluid mb-4'>";
             echo "   
              <!-- inner join -->
              </div>
              <div class='desc align-self-md-center'>
                <h3>Dr.{$row2['head_doctor']}</h3>"; 
                ?>
                <?php
                $query1  = "SELECT * FROM category WHERE cat_id={$_GET['cat_id']}";
                $result1 = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_assoc($result1)) {
               echo" <span class='position d-block mb-4'>Head Doctor of <span>{$row['cat_name']}</span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p> ";
              }
                ?>
              </div>
            </div>

            
            
          </div>
        <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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