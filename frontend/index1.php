<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legalcare</title>
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
	          <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Our Services</a></li>
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
	          <li class="nav-item active"><a href="index1.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Our Services</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item "><a href="Register.php" class="nav-link">Register </a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <?php }?>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome To Legalcare</h2>
          	<h1>Attorneys Fighting For Your 
						  <span
						     class="txt-rotate"
						     data-period="2000"
						     data-rotate='[ "Freedom.", "Rights.", "Case.", "Custody." ]'></span>
						</h1>
            <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
            <p class="mb-4">We have help thousands of people to get relief from national wide fights wrongfull denials. Now they trusted legalcare attorneys</p>
            <p><a href="attorneys.php" class="btn btn-primary mr-md-4 py-2 px-4">Get Legal Advice <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

            <!-- Why Select Us -->

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Services</span>
	            <h2 class="mb-4">Why Select Us?</h2>
	            <p>We Provide all the services you need,We have the best attorneys with 100% winning ratio,which are available 24hrs for you!!</p>
	            <p><a href="attorneys.php" class="btn btn-primary py-3 px-4">Free Consultation</a></p>
	          </div>
    			</div>
    			<div class="col-lg-9 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    					<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Fight for Justice</h3>
		    						<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Best Case Strategy</h3>
		    						<p>Our Best Attourneys Will Provide You The Best Case Strategy Which Will Lead You To Win The Case Easily.</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Experienced Attorney</h3>
		    						<p>Our Experienced Attorneys Are providing 24hrs Services To You!</p>
		    					</div>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

            <!-- Experience -->

   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Legalcare</span>
		            <h2 class="mb-4">We Always Fight For Your Justice to Win</h2>
		            <p>Your Problem Is Our Problem,We Provide Reliable And Effective Legal Services!!!</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Our Mission Is To Provide Justice For Those Who Are in Need!</div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Our Vision Is To Remove Injustice System And To Provide Justice To All.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>We Make Sure That Our Attorneys Provide You The Best Case Strategy And Also Provide You The Justice For Which You Are Fighting For!.</p>
									  </div>
									</div>
								</div>
		            <div class="years d-flex mt-4 mt-md-5">
		            	<h4>
			            	<span class="number mr-2" data-number="40">0</span>
				            <span>Years of Experienced</span>
			            </h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>



    <br><br><br><br>
        <!-- servicess -->
    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Our services</span>
	            <h2 class="mb-4">Our Our Services</h2>
	            <p>We Provide all the services you need,We have the best attorneys with 100% winning ratio,which are available 24hrs for you!!</p>
	            <p><a href="services.php" class="btn btn-primary py-3 px-4">More Services</a></p>
	          </div>
    			</div>
    			<div class="col-lg-9 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    					<div class="col-md-4 d-flex align-items-stretch">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <a href="familylaw.php"><i class="fa fa-2x fa-users"></i></a>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
		    			</div>
                        
		    			<div class="col-md-4 d-flex align-items-stretch">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
							<a href="bus.php"><i class="fa fa-2x fa-hand-holding-usd"></i></a>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
							<a href="crim.php">  <i class="fa fa-2x fa-gavel"></i></a>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



   
		        <!-- Client Review -->

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
		


<?php include 'footer.php' ?>