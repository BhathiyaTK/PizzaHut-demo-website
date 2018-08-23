<?php
    include 'db.php';
    $user_id = $_POST["user_id"];
    $pizza_id = $_POST["pizza_id"];
    $pizza_size = $_POST["pizza_size"];
    $quantity = $_POST["quantity"];

    $query="INSERT INTO shopping_cart(user_id,pizza_id,pizza_size,quantity) VALUES('$user_id','$pizza_id','$pizza_size','$quantity')";
                    
      
    if($conn->query($query)){
?>
<div class="modal-header" id="headerMod">
  <h5 class="modal-title" id="customizeModalTitle" style="font-weight: bold;"><?php echo "&nbsp&nbsp"; ?>Pizza Added to Cart Successfully</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
    }else{
        echo "No";
    }
?>