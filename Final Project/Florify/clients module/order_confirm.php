<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php"); // shipping page, view_order, order_confirmation
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florify - Online Flower Store</title>
  <link rel="stylesheet" href="style.css">
<?php
include "header.php" ?>
<body style="background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner_alignment" >
                <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
            </div>
        </div>
        <div style="text-align:center">
            <h1>Thank you for Trusting Us! 🌸</h1>
            <h3>
                Your order #12345 has been confirmed.
                <br>We're handpicking your blooms and getting them ready to ship.
                <br>🌼 Estimated delivery: [Date]
                <br>You'll receive a tracking link soon.
                <br>If you have any questions, feel free to contact us.
                <br>
                <br>
                <br>
                <br>
                <br><br> <br> <br> <br> <br> <br> <br> 
            </h3>
            <h5> 
                Looking for something more? 🌷
                <br>Explore our full collection — there’s always something blooming just for you! 
                <a style="text-decoration: none;" href="index.php">click this link to find out more options</a>
            </h5>
        </div>
    </div>
  <br> <br>
<?php 
include "footer.php" ?>