<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style-index.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
    <title>PizzaHut.lk/OrderOnline</title>
</head>
<body style="background-image:url(images/wb4.jpg);">
  
  <?php include 'header.php'; ?>
  
    <div class="container" style="padding-bottom: 50px;">
      <p><h1 style="text-align: center; font-weight: bold; color: #e58100;">Let's Start</h1></p>
        <br>
      <div class="row col-md-12 col-sm-12 col-12" style="padding-top: 10px; padding-bottom: 10px; padding-left: 20px;">
        <div class="col-md-4 col-sm-4 col-6">
          <div class="card" style="width: 100%; background-color: transparent; color: #e5bb00; align-items: center;">
            <img class="card-img-top" src="images/curved-arrow1.png" alt="guest checkout" style="width: 250px;">
            <div class="card-body">
              <a href="guest_login.html" class="btn btn-danger">Guest Checkout</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-6">
          <div class="card" style="width: 100%; background-color: transparent; color: #e5bb00; align-items: center;">
            <img class="card-img-top" src="images/guest-login3.png" alt="member login" style="width: 250px;">
            <div class="card-body">
              <a href="login.html" class="btn btn-danger">Member Login</a>
            </div>
          </div>
        </div>
          <div class="col-md-4 col-sm-4 col-6">
            <div class="card" style="width: 100%; background-color: transparent; color: #e5bb00; align-items: center;">
              <img class="card-img-top" src="images/fb200x200.png" alt="facebook login" style="width: 250px;">
              <div class="card-body">
                <a href="#" class="btn btn-danger">Login with FACEBOOK</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
      
</body>
</html>