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
  <link rel="stylesheet" href="admin_style.css">
<?php
include "header.php" ?>
</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 banner_alignment" style="background-color: #fff7f1">
                <h1>Your vase is empty… let's bloom it up! 🌷</h1>
                <h3>
                    You haven't placed any orders yet — the perfect bouquet is just a click away.
                    <br>Start shopping and bring some floral joy to your space!
                </h3>
                <form action="index.php" method="post"><input type="submit" value="Home" name="loginBtn" class="btn-default loginbtn"></form>
            </div>
        </div>
</div>
</body>
</html>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include "footer.php" ?>