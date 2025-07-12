<?php
$msg="";
if(isset($_POST['loginBtn']))
{
  $name = $_POST['txtname'];
  $pwd = $_POST['txtpwd'];
  $email = $_POST['txtemail'];
  $no = $_POST['phntxt'];
  $role = $_POST['role'];

  $con = mysqli_connect("localhost","root","","florifydb");
  $qry = "insert into users(name,emailId,password,phoneno,role) values('$name', '$email', '$pwd', $no, '$role')";
  mysqli_query($con, $qry);
  $i=mysqli_affected_rows($con);
  if($i>0)
    $msg ="<font color='green'>Account Created Successfully !!!</font>";
  else{
    $msg="<font color='red'>Error in Registeration. Try again</font>";
    echo mysqli_error($con);
  }
  mysqli_close($con);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin_style.css">
<?php
include "ad_header.php" ?>
<style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
  </head>

<body style="background-color:rgb(20, 16, 17);">
    <div class="form-container">
    <div class="row">
      <div class="col-sm-12 banner_alignment">
        <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2"></div>
      
      <div class="col-sm-8">
        <h1 style="text-align:center">Add New User</h1>
        
        <form class="form-group" method="post"> 
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="txtname" class="form-control" value=""/>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="txtpwd" class="form-control" value=""/>
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="txtpwd1" class="form-control" value=""/>
          </div>

          <div class="form-group">
            <label>Email-id</label>
            <input type="email" name="txtemail" class="form-control" value=""/>
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="phntxt" class="form-control" value=""/>
          </div>

          <div class="form-group">
            <label>Role</label>
            <select name="role" class="form-control">
              <option></option>
              <option>Admin</option>
              <option>Client</option>
            </select>
          </div>

          <div style="text-align:center;">
          <?php echo $msg; ?>
          <input type="submit" value="Register" name="loginBtn" class="btn-default loginbtn"/>
          </div>
        </form>

        <div style="text-align:center;">
          <h6>Have an account? <a style="text-decoration: none;" href="log_reg.php">Login</a></h6>
          <h6>Member Login <a style="text-decoration: none;" href="../admin/admin_log.php">login</a></h6>
        </div>
      </div>

      <div class="col-sm-2"></div>
    </div>
  </div>
  </div>
</body>
</html>
<?php 
include "ad_footer.php" ?>