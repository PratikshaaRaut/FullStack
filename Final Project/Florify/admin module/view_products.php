<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<?php
  include "ad_header.php" 
?>
<?php
  $con = mysqli_connect("localhost","root","","florifydb");
  $qry = "select * from product";
  $result = mysqli_query($con, $qry);
  echo "<table class='table table-bordered'>";
  echo "<caption><h2 align='center'> Products List</h2></caption>"; 
  echo "<tr>";
  echo "<th>Product Id</th><th>Name</th><th></th><th>type</th><th>Price</th><th>description</th><th>Image</th><th></th>";
  while($row = mysqli_fetch_array($result)){
     echo "<tr>";
     echo "<td>$row[0]</td>";
     echo "<td>$row[1]</td>";
     echo "<td>$row[2]</td>";
     echo "<td>$row[3]</td>";
     echo "<td>$row[4]</td>";
     echo "<td>$row[5]</td>";
     echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
?>
</body>
</html>