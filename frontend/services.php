<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legalcare </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <?php include 'links.php' ?>
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
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item active"><a href="services.php" class="nav-link">Our Services</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item "><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>


<?php } else{?>
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Legalcare <span>A Law Firm Agency</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index1.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item active"><a href="services.php" class="nav-link">Our Services</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item "><a href="Register.php" class="nav-link">Register </a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <?php }?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
   	<section class="ftco-section">
    	<div class="container">
        <div class="row d-flex justify-content-center">
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-family"></span>
        			</div>
        			<h3><a href="familylaw.php">Family Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="familylaw.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-auction"></span>
        			</div>
        			<h3><a href="bus.php">Business Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="bus.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-shield"></span>
        			</div>
        			<h3><a href="ins.php">Insurance Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="ins.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="crim.php">Criminal Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="crim.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-house"></span>
        			</div>
        			<h3><a href="prop.php">Property Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="prop.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-employee"></span>
        			</div>
        			<h3><a href="emp.php">Employment Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="emp.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-money"></span>
        			</div>
        			<h3><a href="fin.php">Financial Law</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="fin.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-medicine"></span>
        			</div>
        			<h3><a href="drug.php">Drug Offenses</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="drug.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="sexu.php">Sexual Offenses</a></h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			<a href="sexu.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>


    
<?php include 'footer.php' ?>