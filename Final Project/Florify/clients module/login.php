<?php
    session_start();
    $msg = "";
    if(isset($_POST['loginBtn'])){
        $username = $_POST['txtuname'];
        $password = $_POST['txtpwd'];
        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "select * from users where emailId	='$username' and password='$password' and role='client'";
        $result = mysqli_query($con, $qry);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            $_SESSION['uid'] =$row[0] ;
            $_SESSION['name'] = $row[1];
            header("location:index.php");
        }
        else{
            $msg = "<font color='red'>Invalid Username & Password !!!</font>";
        }
        mysqli_close($con); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-Florify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\js\jquery.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
include "header.php" ?>

<body style="background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner_alignment" >
                <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Login</h1>
                <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-sm-4"><label class="control-label">Username</label></div>
                            <div class="col-sm-8"><input type="text" name="txtuname" class="form-control" value=""/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"><label class="control-label">Password</label></div>
                            <div class="col-sm-8"><input type="Password" name="txtpwd" class="form-control" value=""/></div>
                            
                            
                        </div>
                       <center> <?php echo $msg; ?></center>
                        <div style="text-align:center;">
                        <input  type="submit" value="Login" name="loginBtn" class="btn-default loginbtn">
                        </div>
                </form>
                <div style="text-align:center;">
                    <h6>Don't have a account? <a style="text-decoration: none;" href="registeration.php">register yourself</a></h6>
                    <h6>Member Login <a style="text-decoration: none;" href="../admin/admin_log.php">login</a></h6>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>

<?php 
include "footer.php" ?>