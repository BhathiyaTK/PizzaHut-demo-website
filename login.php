<?php
include 'db.php';

session_start();

if(isset($_SESSION["first_name"])){
  header("Location: menu.php");
}



if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  if(isset($_POST["register"])){
      $title = $_POST["title"];
      $first_name = $_POST["first_name"]; 
      $last_name = $_POST["last_name"];
      $address = $_POST["address"];
      $mobile = $_POST["mobile"];
      $city = $_POST["city"];
      $province = $_POST["province"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $confirm_pass = $_POST["confirm_pass"];



      if(($first_name!="")&&($last_name!="")){
        $query="INSERT INTO members(title,first_name,last_name,address,mobile,city,province,email,password) VALUES('$title','$first_name','$last_name','$address','$mobile','$city','$province','$email','$password')";
                      
        
        if($conn->query($query)){

            $registration_message="Registered Successfully. Please login to continue.";

            $to = $email;
            $subject = "Pizzahut Resistration";
            $message = "<h4>Thanks for Register</h4>";

            mail($to,$subject,$message);

        }else{
            $registration_message="Registration Failed";
        }

      }else{
        $registration_message="Registration Failed : Input all the data";
      }
  } // register



    if(isset($_POST["login"])){
      $email = $_POST["email"];
      $password = md5($_POST["password"]);

    
      $query="SELECT * FROM members WHERE email='$email' AND password='$password'";
      $r=$conn->query($query);
      if($r->num_rows>0){
          while($row=$r->fetch_assoc()){
             $_SESSION['first_name']=$row['first_name'];
             $_SESSION['last_name']=$row['last_name'];
             $_SESSION['id']=$row['id'];
             $_SESSION['email']=$row['email'];

             header("location: menu.php");
          }
      }else{
        $login_message="User not found. Please input a correct email and password.";
      }

    } //login firm


} // request method
  
?>


<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
      $("#register_form").submit(function(e){

        error=0;
        if($("#first_name").val()==""){
          $("#first_name").css('border-color', 'red');
          $("#first_name_incomplete").fadeIn(1000);
          error =1;
        }else{
          $("#first_name").css('border-color', 'green');
          $("#first_name_incomplete").fadeOut(1000);
        }

        if($("#last_name").val()==""){
          $("#last_name").css('border-color', 'red');
          $("#last_name_incomplete").fadeIn(1000);
          error=1;
        }else{
          $("#last_name").css('border-color', 'green');
          $("#last_name_incomplete").fadeOut(1000);
        }

        if($("#address").val()==""){
          $("#address").css('border-color', 'red');
          $("#address_incomplete").fadeIn(1000);
          error=1;
        }else{
          $("#address").css('border-color', 'green');
          $("#address_incomplete").fadeOut(1000);
        }


        if(error==1){
          e.preventDefault();
        }

      });
    });

  </script>

  
  
  
    <title>PizzaHut.lk/LoginOrRegister</title>
</head>
<body style="background-image:url(images/wb4.jpg);">
  
  <?php include 'header.php'; ?>
  
    <div class="container" style="background: transparent;margin-top: 50px;color: #b7b5b3;">
      

      <?php if( isset($registration_message) ){ ?>
        <div class="alert alert-success" role="alert" align="center">
          <?php echo $registration_message; ?>
        </div>
      <?php }?>

      <?php if( isset($login_message) ){ ?>
        <div class="alert alert-danger" role="alert" align="center">
          <?php echo $login_message; ?>
        </div>
      <?php }?>


      <div class="row col-md-12 col-sm-12 col-12">
        <div class="col-md-5 col-sm-12 col-12">
          <p><h3 style="font-weight: bold; color: #e58100; margin-left: 15px;">Login</h3></p>
          <h1 style="font-size: 13px; color:#e58100; margin-left: 15px; ">Please enter your login details to proceed.</h2>
          <hr>
           <form action="login.php" method="POST">
              <div class="card" style="width: 100%; background-color:transparent; color: #b7b5b3">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="text" class="form-control" name="email" id="inputAddress" placeholder="Your E-mail" style="background-color:transparent; ; color: #b7b5b3">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="inputAddress" placeholder="Password" style="background-color:transparent; ; color: #b7b5b3">
                  </div>
                  <div class="form-row col-md-12 col-sm-12 col-12">
                    <div class="form-check col-md-8 col-sm-8 col-12">
                      <input class="form-check-input" type="checkbox" id="gridCheck" >
                      <label class="form-check-label" for="gridCheck">
                      Keep me login
                      </label>
                    </div>
                    <div class="form-group col-md-4 col-sm-4 col-12">
                      <a href="">Need a help...?</a>
                    </div>
                  </div>
                  <input class="btn btn-danger" type="submit" name="login" value="Login"/>
                </div>
              </div>
          </form>
        </div>

        
       
            <div class="col-md-7 col-sm-12 col-12">
              <form action="login.php" method="POST" id="register_form">
                  <p><h3 style="font-weight: bold; color: #e58100; margin-left: 15px;">Become a Member</h3></p>
                  <h1 style="font-size: 13px; color:#e58100; margin-left: 15px; ">Be a part of Pizza Hut family.</h1>
                  <hr>
                  <div class="card" style="width: 100%; background-color: transparent; color: #b7b5b3">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-2 col-sm-3 col-5">
                          <label for="inputState">Title</label>
                          <select id="inputState" name="title" class="form-control" style="background-color: transparent; color: #b7b5b3">
                            <option selected>Mr.</option>
                            <option>Mrs.</option>
                            <option>Miss.</option>
                            <option>Dr.</option>
                            <option>Rev.</option>
                            <option>Ms.</option>
                          </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-9 col-12">
                            <label for="inputFirstName4">First Name</label>
                            <input type="text" name="first_name"  class="form-control" id="first_name" placeholder="First Name" style="background-color: transparent; color: #b7b5b3">
                            <label id="first_name_incomplete" style="color: red;display: none;">Please fill in the first name</label>
 
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputLastName4">Last Name</label>
                            <input type="text" name="last_name"   class="form-control" id="last_name" placeholder="Last Name" style="background-color: transparent; color: #b7b5b3">
                            <label id="last_name_incomplete" style="color: red;display: none;">Please fill in the last name</label>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" name="address"   class="form-control" id="address" placeholder="Your Address" style="background-color: transparent; color: #b7b5b3">
                          <label id="address_incomplete" style="color: red;display: none;">Please fill in the address</label>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4 col-sm-6 col-12">
                            <label for="inputMobileNo">Mobile Number</label>
                            <input type="text" name="mobile"   class="form-control" id="inputAddress2" placeholder="+94 XX XXX XXX" style="background-color: transparent; color: #b7b5b3">
                        </div>
                        <div class="form-group col-md-4 col-sm-7">
                          <label for="inputEmail4">City</label>
                          <input type="text" name="city" class="form-control" id="inputAddress2" placeholder="City" style="background-color: transparent; color: #b7b5b3">
                        </div>
                        <div class="form-group col-md-4 col-sm-5">
                          <label for="inputState">Province</label>
                            <select id="inputState" name="province" class="form-control" style="background-color: transparent; color: #b7b5b3">
                              <option selected>Choose...</option>
                              <option value="West">Western</option>
                              <option value="South">South</option>
                              <option value="Central">Central</option>
                              <option value="Sabra">Sabaragamuwa</option>
                              <option value="Uwa">Uwa</option>
                              <option value="East">East</option>
                              <option value="Waya">Wayamba</option>
                              <option value="North">North</option>
                              <option value="North Central">North-Central</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail4">E-mail</label>
                          <input type="text" name="email"   class="form-control" id="inputAddress2" placeholder="Your E-mail" style="background-color: transparent; color: #b7b5b3">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 col-sm-6 col-12">
                            <label for="inputMobileNo">Password</label>
                            <input type="password" name="password"   class="form-control" id="inputAddress2" placeholder="Password" style="background-color: transparent; color: #b7b5b3">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-12">
                          <label for="inputEmail4">Confirm Password</label>
                          <input type="password" name="confirm_pass"   class="form-control" id="inputAddress2" placeholder="Retype Password" style="background-color: transparent; color: #b7b5b3">
                        </div>
                      </div>
                      <input class="btn btn-danger" type="submit" name="register" value="Register"/>
                    </div>
                  </div>
                </div>
              </div>

          </form>
        </div>
      
</body>
</html>