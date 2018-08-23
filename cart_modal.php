<?php
include 'db.php';

session_start();

if(!isset($_SESSION["first_name"])){
  header("Location: login.php");
}


$user_id = $_SESSION["id"];

$sql= "SELECT * FROM shopping_cart where user_id='$user_id'";
$result=mysqli_query($conn,$sql);
?>

<div class="modal-header" id="headerMod">
  <h5 class="modal-title" id="customizeModalTitle" style="font-weight: bold;"><?php echo "&nbsp&nbsp"; ?> Shopping Cart</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body" style="background-image: url(images/back9.jpg); color: #ffffff"  >
  <div class="row col-md-12">
    <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pizza</th>
              <th scope="col">Size</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=0;
          while ($row=$result->fetch_assoc()) { 
            $i++;
            $pizza_id=$row["pizza_id"];
            $pizza_name = "";
            $pizza_price=0;

            $sql2= "SELECT * FROM pizzas where id='$pizza_id'";
            $result2=mysqli_query($conn,$sql2);

            while ($row2=$result2->fetch_assoc()) { 
              $pizza_name=$row2["name"];
              switch ($row["pizza_size"]) {
                  case "l":
                      $pizza_price = $row2["l_price"];
                      break;
                  case "m":
                      $pizza_price = $row2["m_price"];
                      break;
                  case "s":
                      $pizza_price = $row2["s_price"];
                      break;
              }
            }
            ?>
              <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $pizza_name;?></td>
                  <td>
                    <?php
                      switch ($row["pizza_size"]) {
                          case "l":
                              echo "Large";
                              break;
                          case "m":
                              echo "Medium";
                              break;
                          case "s":
                              echo "Small";
                              break;
                      }
                    ?>
                  </td>
                  <td>Rs. <?php echo number_format($pizza_price);?>.00</td>
                  <td><?php echo $row["quantity"];?></td>
                  <td>Rs. <?php echo number_format($pizza_price*$row["quantity"]);?>.00</td>
                  <td>
                    <form action="delete_cart.php" method="post">
                      <input type="hidden" name="cart_id" value="<?php echo $row['id'];?>">
                      <input type="submit" value="Delete" class="btn btn-danger btn-sm"/>
                    </form>
                  </td>
              </tr>

          <?php
          }
          ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
  <button id="checkout_btn" class=" btn btn-danger add_to_cart_btn" onclick= "checkout();">Checkout</button>
</div>