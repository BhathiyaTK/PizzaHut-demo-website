<?php
include 'db.php';

session_start();

if(!isset($_SESSION["first_name"])){
  header("Location: login.php");
}


$pizza_id = $_POST["pizza_id"];

$sql= "SELECT * FROM pizzas where id='$pizza_id'";
$result=mysqli_query($conn,$sql);

while ($row=$result->fetch_assoc()) { 
?>

<script type="text/javascript">
  user_id = <?php echo $_SESSION["id"];?>;

  pizza_id = <?php echo $row["id"]; ?>;
  small_price = parseInt(<?php echo $row["s_price"]; ?>);
  medium_price = parseInt(<?php echo $row["m_price"]; ?>);
  large_price = parseInt(<?php echo $row["l_price"]; ?>);
  selected_pizza_type="s";

  function changeType(val){
    selected_pizza_type = val;

    if(val=="s"){
      $("#model_price_label").html("Rs. " + small_price + ".00");
    }else if(val=="m"){
      $("#model_price_label").html("Rs. " + medium_price + ".00");
    }else{
      $("#model_price_label").html("Rs. " + large_price + ".00");
    }
    totalValue();
  }

  function totalValue(){
    quantity = $("#quantity").val();
     if (quantity==""){
      quantity =0;
     }
     quantity = parseInt(quantity);
    if(selected_pizza_type=="s"){
      $("#total_price_label").html("Total Price : Rs. " + small_price * quantity + ".00");
    }else if(selected_pizza_type=="m"){
      $("#total_price_label").html("Total Price : Rs. " + medium_price * quantity+ ".00");
    }else{
      $("#total_price_label").html("Total Price : Rs. " + large_price * quantity+ ".00");
    }
  }

  function addToCart(){
    quantity = $("#quantity").val();
    pizza_type = $("#pizza_type").val();

    $.post(
            "addToCart.php", 
            {
              pizza_id: pizza_id,
              user_id: user_id,
              pizza_size: pizza_type,
              quantity: quantity
            },
            function(result){
                $("#order_modal_div").html(result);
                cart_items = parseInt($("#cart_items").html()) + 1;
                $("#cart_items").html(cart_items);

            }
          );
  }
</script>
<div class="modal-header" id="headerMod">
  <img src = "images/pizzas/<?php echo $row['image'];?>" width="38">
  <h5 class="modal-title" id="customizeModalTitle" style="font-weight: bold;"><?php echo "&nbsp&nbsp"; ?>Customize <?php echo $row["name"]; ?> Pizza</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body" style="background-image: url(images/back9.jpg); color: #ffffff"  >
  <div class="row col-md-12">
    <div class="col-md-12">
      <label>Select Pizza Size :</label>
      <select class="form-control" onchange="changeType(this.value);" id="pizza_type">
        <option value="s" selected>Personal Pan Pizza</option>
        <option value="m">Medium Pizza</option>
        <option value="l">Large Pizza</option>
      </select>
    </div>
  </div>
  <br><br><br>
  <div class="row col-md-12">
    <div class="col-md-7">
      <label >Pizza Price :<?php echo "&nbsp"; ?></label>
      <label  id="model_price_label" style="font-size: 20px;">Rs. <?php echo $row['s_price'];?>.00</label> <!--set the price of selected pizza size-->
    </div> 
    <div class="col-md-5">
      <label >Quantity :<?php echo "&nbsp"; ?></label>
        <input type="number" name="quantity" id="quantity" min="1" style="width: 70px;" value="1" onkeyup ="totalValue();">
    </div>
  </div>
  <hr>
  <div class="row col-md-12">
      <label class="col-md-12" id="total_price_label" style="font-size: 20px; font-weight: bold; text-align: center;">Total Price : <?php echo "&nbsp"; ?>Rs. <?php echo $row['s_price'];?>.00</label>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
  <button id="add_to_cart_btn" class=" btn btn-danger add_to_cart_btn" onclick= "addToCart();">Add to Cart</button>
</div>

<?php
}
?>