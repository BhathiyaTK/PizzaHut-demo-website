<!DOCTYPE html>
<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style-index.css">
		<script src="jquery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	  	<title>PizzaHut.lk/Feedback</title>
	</head>
	<body style="background-image:url(images/wb4.jpg);">
		
		<?php include 'header.php'; ?>

		<div class="container" style="background: transparent;margin-top: 20px;color: #b7b5b3; padding-bottom: 10px;">
			<p><h1 style="text-align: center; font-weight: bold; color: #e58100">Feedback</h1></p>
			<hr>
			<form method="POST" action="process.php">
				<div class="form-row">
					<div class="form-group col-md-2 col-sm-4 col-6" style="text-align: left;">
						<label for="inputInquiryType">Inquiry Type</label>
						<select id="inputInquiryType" class="form-control" style="background-color: transparent; color: #b7b5b3">
							<option selected>Order Inquiry</option>
							<option>Complaint</option>
							<option>Appreciation</option>
							<option>Suggestion</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1 col-sm-3 col-4">
						<label for="inputState">Title</label>
						<select id="inputState" class="form-control" style="background-color: transparent; color: #b7b5b3">
							<option>Mr.</option>
							<option>Mrs.</option>
							<option>Miss.</option>
							<option>Dr.</option>
							<option>Rev.</option>
							<option>Ms.</option>
						</select>
					</div>
				    <div class="form-group col-md-4 col-sm-9 col-12" style="text-align: left;">
				      <label for="inputFirstName4">First Name</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="First Name" style="background-color: transparent; color: #b7b5b3">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputLastName4">Last Name</label>
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" style="background-color: transparent; color: #b7b5b3">
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Your Address" style="background-color: transparent; color: #b7b5b3">
				</div>

				<div class="form-row">
					<div class="form-group col-md-2 col-sm-4 col-12" style="text-align: left;">
					    <label for="inputMobileNo">Mobile Number</label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="+94 XX XXX XXX" style="background-color: transparent; color: #b7b5b3">
					</div>
					<div class="form-group col-md-8 col-sm-8 col-12" style="text-align: left;">
					    <label for="inputEmail4">E-mail</label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Your E-mail" style="background-color: transparent; color: #b7b5b3">
					</div>
				</div>
			  	
			  	<div class="form-row">
			    	<div class="form-group col-md-4 col-sm-5" style="text-align: left;">
			      		<label for="inputCity">City</label>
			      		<input type="text" class="form-control" id="inputCity" placeholder="City" style="background-color: transparent; color: #b7b5b3">
			    	</div>
			    	<div class="form-group col-md-2 col-sm-4" style="text-align: left;">
			     		<label for="inputState">Province</label>
			      		<select id="inputState" class="form-control" style="background-color: transparent; color: #b7b5b3">
			        		<option selected>Choose...</option>
			        		<option>Western</option>
			        		<option>South</option>
			        		<option>Central</option>
			        		<option>Sabaragamuwa</option>
			        		<option>Uwa</option>
			        		<option>East</option>
			        		<option>Wayamba</option>
			        		<option>North</option>
			        		<option>North-Central</option>
			      		</select>
			    	</div>
			    	<div class="form-group col-md-2 col-sm-3" style="text-align: left;">
					    <label for="inputZip">Zip</label>
					    <input type="text" class="form-control" id="inputZip" style="background-color: transparent; color: #b7b5b3">
			    	</div>
			  	</div>
			  	<div class="form-group">
			  		<label for="inputMassege">Massege</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Your Massege" style="background-color: transparent; color: #b7b5b3"></textarea>
			  	</div>
			  	<div class="form-group">
			    	<div class="form-check">
			      		<input class="form-check-input" type="checkbox" id="gridCheck" >
			      		<label class="form-check-label" for="gridCheck">
			        		Check me out
			      		</label>
			    	</div>
			  	</div>
			  	<button type="submit" class="btn btn-danger">Submit</button>
			  	<br><br>
			  	<div class="form-group" style="text-align: center; font-size: 14px;">
			  		<p>Thanks for your feedback. It definitly helps us to improve our products & services.</p>
			  	</div>
			  	
			</form>
		</div>

		<?php include 'footer.php'; ?>

	</body>
</html>