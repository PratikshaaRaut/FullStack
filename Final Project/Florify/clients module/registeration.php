<?php
$msg="";
if(isset($_POST['loginBtn']))
{
  $name = $_POST['txtname'];
  $pwd = $_POST['txtpwd'];
  $email = $_POST['txtemail'];
  $no = $_POST['phntxt'];
  $con = mysqli_connect("localhost","root","","florifydb");
  $qry = "insert into users(name,emailId,password,phoneno,role) values('$name', '$email', '$pwd', $no, 'client')";
  mysqli_query($con, $qry);
  $i=mysqli_affected_rows($con);
  if($i>0)
    $msg ="<font color='green'>Registeration Successfull !!!</font>";
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
  <title>Florify - Online Flower Store</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function check(){
        obj = new XMLHttpRequest();
        email=document.getElementById("e1").value;
        obj.open("get","validateEmail.php?id="+email, true);
        obj.send();
        obj.onreadystatechange = function(){
          if(obj.status == 200 && obj.readyState==4){
            document.getElementById("l1").innerHTML = obj.responseText;
          }
        }
    }
  </script>
<?php
include "header.php" ?>

<body style="background-color: #fce4ec;">
    
    <div class="row">
      <div class="col-sm-12 banner_alignment">
        <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2"></div>
      
      <div class="col-sm-8">
        <h1 style="text-align:center">Register</h1>
        
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
            <input id="e1" type="email" onchange="check()" name="txtemail" class="form-control" value=""/>
            <label id="l1"></label>
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="phntxt" class="form-control" value=""/>
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
</body>
</html>

<?php 
include "footer.php" ?>