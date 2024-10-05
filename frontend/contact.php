<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legalcare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  include "../admin/db.php";
  session_start();
if(isset($_SESSION['uId'])){
    $user_id=$_SESSION['uId'];

  ?>  
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Legalcare <span>A Law Firm Agency</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index1.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	<?php
    $select = mysqli_query($conn,"SELECT * FROM Registration WHERE user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($select) > 0){
       $fetch = mysqli_fetch_assoc($select);
    }  
    ?>
   	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $fetch['username']?>" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $fetch['email']?>" name="email" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
<?php
}
else{
    ?>
      <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Legalcare <span>A Law Firm Agency</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
   	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email"name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub" required>
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <?php
 }?>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Legalcare <span>A Law Firm Agency</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="familylaw.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="bus.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="ins.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="crim.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="drug.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="emp.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                <li><a href="prop.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php

if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    $sub=$_POST['sub'];
    $msg=$_POST['msg'];

   
 $sql="insert into contact(name,email,subject,message)
 values('$name','$email','$sub','$msg')";
 $result=mysqli_query($conn,$sql);
 if(!$sql){
     echo"Something Went Wrong";
 }
 else{
    echo "<script>alert('Thanks For Contacting Us!')</script>";
}
}
?>