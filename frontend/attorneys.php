<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Attorneys</title>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  </head>
  <body>
    
  <?php
session_start();
if(isset($_SESSION['uId'])){?>
   
   <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Legalcare <span>A Law Firm Agency</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index1.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Our Services</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item "><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Expert Attorneys</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index1.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
          <div class="container con2">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords" name="search">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit" name="btn">Search</button>
                                    </div>
        
</form>
        </div>
       
      </div>
          <div>
       
    </section>   

    <section class="ftco-section">
    	<div class="container-fluid px-md-5">
        <div class="row">
        <?php
                include "../admin/db.php"; 
  if(isset($_POST["btn"])){
    $search=$_POST['search'];
   
$search2="SELECT * from  registration where username LIKE'%$search%' || address LIKE'%$search%' || category LIKE'%$search%' ";
 $result2=mysqli_query($conn,$search2);
while($fetch=mysqli_fetch_array($result2)){
    echo '
             <div class="col-lg-3 col-sm-6">
             <div style="position: relative; display: inline-block;">
             <a href="profiles.php?user_id='.$fetch['user_id'].'">
      <img src="../admin/uploads-images/'.$fetch['lawyer_photograph'].'" alt="description" width="350px" height="400px"></a>
       <h5 style="position: absolute; bottom: 60px; left: 10px; color: white;">'.$fetch['username'].'</h5>
       <p style="position: absolute; bottom: 25px; left: 10px; color: white;">'.$fetch['category'].'</p>
       <p style="position: absolute; bottom: 5px; left: 10px; color: white;">'.$fetch['address'].'</p>
       </div>
       </div>
            ';
          }}
          else{
                       
          $select = mysqli_query($conn,"SELECT * FROM registration WHERE role_id =2") or die('query failed');
          while($fetch=mysqli_fetch_array($select)){    
            echo '
            <div class="col-lg-3 col-sm-6">
             <div style="position: relative; display: inline-block;">
             <a href="profiles.php?user_id='.$fetch['user_id'].'">
  <img src="../admin/uploads-images/'.$fetch['lawyer_photograph'].'" alt="description" width="350px" height="400px"></a>
  <h5 style="position: absolute; bottom: 60px; left: 10px; color: white;">'.$fetch['username'].'</h5>
  <p style="position: absolute; bottom: 25px; left: 10px; color: white;">'.$fetch['category'].'</p>
  <p style="position: absolute; bottom: 5px; left: 10px; color: white;">'.$fetch['address'].'</p>
</div>
</div>
              ';
          }}
          ?>
        	</div>
</div>
</section>


 
    
<?php }
else{?>
    	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="index1.php">Legalcare <span>A Law Firm Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
  
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="index1.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Our Services</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item "><a href="Register.php" class="nav-link">Register </a></li>
              </ul>
            </div>
            
          </div>
        </nav>
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Expert Attorneys</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
          <div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords" name="search">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit" name="btn">Search</button>
                                    </div>
          
          
        </div>
</form>

      </div>
        </div>

      </div>
    </section>
    <section class="ftco-section">
    	<div class="container-fluid px-md-5">
        <div class="row">
        <?php
                include "../admin/db.php"; 
  if(isset($_POST["btn"])){
    $search=$_POST['search'];
   
$search2="SELECT * from  registration where username LIKE'%$search%' || address LIKE'%$search%' || category LIKE'%$search%' ";
 $result2=mysqli_query($conn,$search2);
while($fetch=mysqli_fetch_array($result2)){
    echo '
        	<div class="col-lg-3 col-sm-6">
             <div style="position: relative; display: inline-block;">
             <a href="profiles.php?user_id='.$fetch['user_id'].'">
  <img src="../admin/uploads-images/'.$fetch['lawyer_photograph'].'" alt="description" width="350px" height="400px"></a>
  <h5 style="position: absolute; bottom: 60px; left: 10px; color: white;">'.$fetch['username'].'</h5>
  <p style="position: absolute; bottom: 25px; left: 10px; color: white;">'.$fetch['category'].'</p>
  <p style="position: absolute; bottom: 5px; left: 10px; color: white;">'.$fetch['address'].'</p>
</div>
</div>
            ';
          }}
          else{
                       
          $select = mysqli_query($conn,"SELECT * FROM registration WHERE role_id =2") or die('query failed');
          while($fetch=mysqli_fetch_array($select)){    
            echo '
            <div class="col-lg-3 col-sm-6">
             <div style="position: relative; display: inline-block;">
             <a href="profiles.php?user_id='.$fetch['user_id'].'">
  <img src="../admin/uploads-images/'.$fetch['lawyer_photograph'].'" alt="description" width="350px" height="400px"></a>
  <h5 style="position: absolute; bottom: 60px; left: 10px; color: white;">'.$fetch['username'].'</h5>
  <p style="position: absolute; bottom: 25px; left: 10px; color: white;">'.$fetch['category'].'</p>
  <p style="position: absolute; bottom: 5px; left: 10px; color: white;">'.$fetch['address'].'</p>
</div>
</div>
            ';
          }}
          ?>
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
              <h2 class="ftco-heading-2">Our Services</h2>
              <ul class="list-unstyled">
                <li><a href="familylaw.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="bus.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="ins.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="crim.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="drug.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="fin.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Financial Accident</a></li>
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

<p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p> 
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
  <style>
    .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}


    .button {
      margin-top:80%;
  margin-left:18%;
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button:active {
	transform: scale(0.95);
  text-decoration:none;
}

.button:focus {
	outline: none;

}

.button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}
  .button:hover{
    background-color:#93734C;

  }


</style>
    
  </body>;
</html>
