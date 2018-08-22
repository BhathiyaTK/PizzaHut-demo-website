	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function openCart(){
	       //alert("hello");=
	          $("#cartModal").modal("show");
	          $.post(
	            "cart_modal.php", 
	            function(result){
	                $("#cart_modal_div").html(result);
	            }
	          );
	      }
	</script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="index.php">
	  	<img src = "images/pizzahut_logo.png" width="200px;">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="dropdown show">
	        <a class="nav-link" href="menu.php">Menu</a>
	        
	      </li>
	      <li class="show">
	        <a class="nav-link" href="online_order.php">Order Online</a>
	      </li>
	      <li class="show">
	        <a class="nav-link" href="locations.php">Locations</a>
	      </li>
	      
	      <li class="show">
	        <a class="nav-link" href="about_us.php">About Us</a>
	      </li>
	      <li class="show">
	        <a class="nav-link" href="feedback.php">Feedback</a>
	      </li>
	      <li class="show">
	        <a class="nav-link" href="career.php">Careers</a>
	      </li>
	    </ul>
	      <?php if(isset($_SESSION["first_name"])){?>
		      <label style="color: white;padding-right: 20px;"> <?php echo "Hello " . $_SESSION["first_name"]; ?></label>



		      <button class="btn btn-primary" style="margin-right: 20px;" onclick="openCart();">
				  <i class="fas fa-shopping-cart"></i> &nbsp; <span class="badge badge-pill badge-light" id="cart_items">
				  	<?php
				  	$user_id = $_SESSION["id"];
				  	$sql= "SELECT * FROM shopping_cart where user_id='$user_id'";
					$result=mysqli_query($conn,$sql);
					$number_of_shopping_cart_items_for_the_user=0;
					while ($row=$result->fetch_assoc()) {
						$number_of_shopping_cart_items_for_the_user++;
					}
					echo $number_of_shopping_cart_items_for_the_user;
				  	?>
				  </span>
			  </button>


		      <a class="btn btn-danger my-2 my-sm-0" href="sign_out.php">Sign Out</a>
		  <?php }else{ ?>
		  	  <a class="btn btn-danger my-2 my-sm-0" href="login.php">Login</a>
		  <?php } ?>
	  </div>
	</nav>

	<div class="modal fade" id="cartModal" style="text-align: center;">
      <div class="modal-dialog" >
          <div class="modal-content" style="background-image: url(images/back10.jpg); color: #d1cbd3; width: 800px;" id="cart_modal_div">
               
          </div>
      </div>
  </div>