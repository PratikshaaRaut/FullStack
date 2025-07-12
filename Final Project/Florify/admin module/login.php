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
<?php
$pageTitle = "Member Login";
$pageContent = "<h1>Member Login</h1>
<p>Login to track your orders, manage your cart, and access special deals.</p>
<form>
    <label for='username'>Username:</label><br>
    <input type='text' id='username' name='username'><br><br>
    
    <label for='password'>Password:</label><br>
    <input type='password' id='password' name='password'><br><br>
    
    <button type='submit'>Login</button>
</form>";
include 'layout.php';
?>
