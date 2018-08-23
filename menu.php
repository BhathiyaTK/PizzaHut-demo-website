<?php
include 'db.php';

session_start();

if(!isset($_SESSION["first_name"])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style-index.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
      function orderNow(pizza_id){
        //alert(pizza_id);
          $("#customizeModel").modal("show");
          $.post(
            "order_modal.php", 
            {pizza_id: pizza_id},
            function(result){
                $("#order_modal_div").html(result);
            }
          );
      }
  </script>
  <title>PizzaHut.lk | Menu</title>
</head>
<body style="background-image:url(images/wb4.jpg);">
    
    <?php include 'header.php'; ?>

      <div class="row col-md-12">
        <div class="col-md-10 page-header ">
              <div class="row">
                  <div class="col-md-6">
                    <h1 style="font-weight: bold; color: #e58100; padding: 20px; text-align: left;">

                      <?php 
                        if(isset($_GET["category"])){
                          $category_id=$_GET["category"];
                        }else{
                          $category_id=1;
                        }
                        $category_name = "";
                        
                        $sql= "SELECT name FROM pizza_categories where id='$category_id'";

                        $result=mysqli_query($conn,$sql);

                        while ($row=$result->fetch_assoc()) {
                          $category_name=$row["name"];
                        }
                        echo $category_name;
                      ?>

                    </h1>
                  </div>
                  <div class="col-md-6">
                     <?php 
                          $sql= "SELECT * FROM pizza_categories where status='1'";
                            $result=mysqli_query($conn,$sql);
                            while ($row=$result->fetch_assoc()) {
                          ?>
                          <a style="margin-top:30px;" class="btn btn-warning <?php if($category_id==$row["id"]){ ?>active<?php }?>" href="menu.php?category=<?php echo $row["id"];?>">
                            <?php echo $row["name"];?>
                          </a>
                        <?php
                            }
                        ?>
                  </div>
              </div>
        </div>
        

      </div>
      
    <div class="container" style="padding-bottom: 45px;">

             
          <?php

          $sql= "SELECT * FROM pizzas where category='$category_id'";
          $result=mysqli_query($conn,$sql);

          ?>

          <div class="row col-md-12" style="padding-top: 10px; padding-bottom: 10px;">
          <?php 
            $i=0;
            while ($row=$result->fetch_assoc()) { 
          ?>
                
                <div class="col-md-3 col-sm-6 col-12" style="background-image: url(images/wb1.jpg); color: #e5bb00; text-align: center; padding: 10px;">
                      <img src = "images/pizzas/<?php echo $row['image'];?>" width="200">
                          <p style="color: #b7b5b3; padding-top: 10px;">
                          <?php 
                          echo $row["name"];  
                          ?>
                          </p>
                      <table border="1" align="center" style="text-align: center; width: 200px;">
                          <tr>
                              <td>Pan</td>
                              <td>PP</td>
                              <td>M</td>
                              <td>L</td>
                          </tr>
                          <tr>
                              <td>Rs.</td>
                              <td><?php echo $row['s_price']; ?></td>
                              <td><?php echo $row['m_price']; ?></td>
                                <td><?php echo $row['l_price']; ?></td>
                            </tr>
                      </table>
                      <br>
                      <button id="cus_btn<?php echo $i;?>" class="btn btn-info customizeNow" onclick="orderNow(<?php echo $row['id']; ?>)" >Order</button>
                  </div>

                <!-- Modal 1 -->
                  
          <?php
            }
          ?>
          </div>

          <div class="modal fade" id="customizeModel" >
              <div class="modal-dialog" role="document">
                  <div class="modal-content" style="background-image: url(images/back10.jpg); color: #d1cbd3;" id="order_modal_div">
                       
                  </div>
              </div>
          </div>
      
    </div>  

    <?php include 'footer.php'; ?>

</body>
</html>