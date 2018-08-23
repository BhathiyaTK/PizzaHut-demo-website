<?php
include 'db.php';

session_start();

if(!isset($_SESSION["first_name"])){
  header("Location: login.php");
}


$user_id = $_SESSION["id"];
$cart_id = $_POST["cart_id"];



$sql="DELETE FROM shopping_cart WHERE id = $cart_id AND user_id=$user_id ";
$res=mysqli_query($conn,$sql);

header("Location: menu.php");
?>

