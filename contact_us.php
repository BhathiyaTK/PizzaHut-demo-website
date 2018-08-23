<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
  	<title>HTML Forms</title>
</head>
<body style="background-image:url(images/wb4.jpg);">
	
	<?php include 'header.php'; ?>

	<div style="background: #effffb;margin-top: 50px;" align="center">
		<?php echo $_GET["user_name"];?>
		<form method="GET" action="contact_us.php">
			<table  width="500px;">
				<tr>
					<td>Name : </td>
					<td>
						<input type="text" name="user_name"  placeholder="Type your name here...">
					</td>
				</tr>
				<tr>
					<td>Mobile Number : </td>
					<td>
						<input class="green" type="text" name="mobile" placeholder="Type your mobile number here...">
					</td>
				</tr>
				<tr>
					<td>E-Mail : </td>
					<td>
						<input type="text" name="email"  placeholder="Type your email address here...">
					</td>
				</tr>
				<tr>
					<td>Gender </td>
					<td>
						<table>
							<tr>
								<td>
		    						<input type="radio" name="gender" value="Male"> 
		    					</td>
		    					<td>
		    						Male 
		    					</td>
		    					<td>
		    						<input type="radio" name="gender" value="Female"> 
		    					</td>
		    					<td>
		    						Female
		    					</td>
		    				</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>District </td>
					<td>
						<select name="district">
							<option value="Colombo">Colombo</option>
							<option value="Kandy">Kandy</option>
							<option value="Gampaha">Gampaha</option>
							<option value="Galle">Galle</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Subject :</td>
					<td>
						<input class="green" type="text" name="subject" placeholder="Subject here...">
					</td>
				</tr>
				<tr>
					<td>Message :</td>
					<td>
						<textarea name="message" ></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Submit" class="btn btn-success btn-md" style="width: 100%;">
					</td>
				</tr>
			</table>
			</form>
		</div>

	</body>
</html>