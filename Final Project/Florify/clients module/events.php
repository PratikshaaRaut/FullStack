<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florify - Online Flower Store</title>
  <link rel="stylesheet" href="style.css">

  <!-- ✅ Bootstrap 3.4.1 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- ✅ jQuery (required for Bootstrap 3 dropdowns) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- ✅ Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    /* ✅ Ensure dropdown menu appears above */
    .dropdown-menu {
      z-index: 1000;
      position: absolute;
    }
  </style>
</head>
<body>

<!-- ✅ Include header inside body -->
<?php include "header.php"; ?>

<?php
$pageTitle = "Birthday Flowers";
$pageContent = "<h1>Birthday Flowers</h1>
<p>Celebrate birthdays with bright, beautiful blooms. Choose from our birthday-special arrangements!</p>";
?>

<!-- ✅ Main Content -->
<div class="container-fluid" style="background-color: white; position: relative; z-index: 1;">
  <div class="text-center" style="padding: 30px 0;">
    <h1>Flowers for Special Day</h1>
    <p>Celebrate special Occasions with bright, beautiful blooms. Choose from our Occasions-special arrangements!</p>
  </div>

  <?php
  $con = mysqli_connect("localhost", "root", "", "florifydb");
  $qry = "SELECT * FROM product WHERE product_type='Events'";
  $result = mysqli_query($con, $qry);
  $cnt = 0;

  while ($row = mysqli_fetch_array($result)) {
      if ($cnt == 0) 
          echo "<div class='row' style='margin-top: 20px;'>";

      echo "<a href='desc.php?pid=$row[0]'>";
      echo "<div class='col-sm-3 text-center' style='margin-bottom: 20px;'>";
      echo "<div>";
      echo "<img src='{$row[4]}' class='img-responsive' style='height: 300px; width: auto; margin: 0 auto;' />";
      echo "<h4>{$row[1]}</h4>";
      echo "<p>&#8377; {$row[2]}</p>";
      echo "</div>";
      echo "</div>";
      echo "</a>";

      $cnt++;

      if ($cnt == 4) {
          echo "</div>"; // close the row
          $cnt = 0;
      }
  }

  if ($cnt != 0) {
      echo "</div>"; // close last row if not already closed
  }

  mysqli_close($con);
  ?>
</div>

<!-- ✅ Include footer -->
<?php include "footer.php"; ?>

</body>
</html>
