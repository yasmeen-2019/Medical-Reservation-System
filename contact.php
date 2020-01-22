<?php

include("includes/public_header.php");


if (isset($_POST['send'])) {
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $message = $_POST['message'];


  $query = "INSERT INTO contact(name,email,message) values('$name','$email','$message')";
    mysqli_query($conn,$query);

  echo "<script> window.top.location='contact.php'</script>";
  exit;
}
?>
    <script type="text/javascript">
      document.getElementById("send").onclick=function(){
        myfunction();
      }

      function(){
        myfunction(){
          document.getElementById("sms").style.visibility="visible";
        }
      }
    </script>


    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

   <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> King Hussein Business Park</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+962 7852 198</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">yasmeen@123.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
               <button id="payment-button" type="submit" name="send" class="btn btn-primary btn-user btn-block">
                      <span id="send">Send</span> 
                  </button>
                <div class="alert alert-success" id="sms" style="visibility: hidden;">Your message has been sent successfully</div>
              </div>
            </form>
          
          </div>

          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13538.392474614871!2d35.8338515!3d31.9717977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd93a3913affa5945!2sKing%20Hussein%20Business%20Park!5e0!3m2!1sen!2sjo!4v1578835292053!5m2!1sen!2sjo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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