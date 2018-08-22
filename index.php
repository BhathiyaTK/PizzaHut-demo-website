<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style-index.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style type="text/css">
		.container{
		}
	</style>

  	<title>
  		Pizza Hut
  	</title>
</head>
<body style="background-image:url(images/wb4.jpg);">
	
	<?php include 'header.php'; ?>

  	<div class="container">
  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img class="d-block img-fluid" src="images/banner.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/banner_1.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/banner10.jpg" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/banner_2.jpg" alt="Forth slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/banner9.jpg" alt="Fifth slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

  		<div class="row col-md-12 col-sm-12" style="padding-top: 10px; padding-bottom: 10px; padding-left: 20px;">
  			<div class="col-md-6 col-sm-6 col-12">
  				<div class="card" style="width: 105%; background-image: url(images/wb1.jpg); color: #e5bb00">
				  <img class="card-img-top" src="images/hot_pizza2.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Today's Hot Deals</h4>
				    <p class="card-text">
				    	<p style="font-weight: bold;">Double Masti Pizzas
				    		<p style="font-weight: bold;">
				    			Two Regular Pizzas : Rs.799/-<br>
				    			Two Large Pizzas : Rs.1299/-<br>		
				    		</p>
				    	</p>
				    	Come on! Hurry up! Get this special deal today.
				    </p>
				    <a href="#" class="btn btn-danger">Buy Now</a>
				  </div>
				</div>
  			</div>
  			<div class="col-md-6 col-sm-6 col-12">
  				<div class="card" style="width: 105%; background-image: url(images/wb1.jpg); color: #e5bb00">
				  <img class="card-img-top" src="images/pizzahut1.png" alt="Card image cap" height="241px">
				  <div class="card-body">
				    <h4 class="card-title" >Yesterday's Hot Deals</h4>
				    <p class="card-text">
				    	<p style="font-weight: bold;">Exclusive Order Online
				    		<p style="font-weight: bold;">
				    			Deal 1 : Two Large Pizzas for Rs.1799/-<br>
				    			Deal 2 : Two Regular Pizzas for Rs.1149/-<br>		 
				    		</p>
				    	</p>
				    	We're sorry! You missed that deal.
				    </p>
				    <a href="#" class="btn btn-danger">Deal Closed</a>
				  </div>
				</div>
  			</div>
  			
  		</div>
  	</div>

  	<?php include 'footer.php'; ?>
  	
  		
</body>
</html>