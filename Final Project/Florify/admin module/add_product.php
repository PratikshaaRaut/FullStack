<?php
$msg = "";

if (isset($_POST['addBtn'])) {
  // Get form inputs
  $name = $_POST['product_name'];
  $pwd = $_POST['event_type'];
  $price = $_POST['product_price'];
  $desc = $_POST['product_desc'];

  // Handle image upload
  if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0) {
    $filename = basename($_FILES['myfile']['name']);
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/Florify/admin module/uploadProductImg/";
    $relativePath = "../Florify/admin module/uploadProductImg/" . $filename;
    $uploadFile = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadFile)) {
      // Save to database
      $con = mysqli_connect("localhost", "root", "", "florifydb");
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $qry = "INSERT INTO product (product_name, product_price, product_desc, product_image, product_type)
              VALUES ('$name', '$price', '$desc', '$relativePath','$pwd')";

      if (mysqli_query($con, $qry)) {
        $msg = "<font color='green'>Product Added Successfully!</font>";
      } else {
        $msg = "<font color='red'>Error: " . mysqli_error($con) . "</font>";
      }

      mysqli_close($con);
    } else {
      $msg = "<font color='red'>Error uploading file!</font>";
    }
  } else {
    $msg = "<font color='red'>No file selected or file is corrupted!</font>";
  }
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

  <?php include "ad_header.php"; ?>

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
<body>

<div class="form-container">
  <h2>Add Product</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="product_name">Product Name</label>
      <input type="text" class="form-control" id="product_name" name="product_name" required>
    </div>

    <div class="form-group">
                            <label for=""> Product Type</label>
                            <select class="form-control" name="event_type">
                                <option></option>
                                <option>Birthday</option>
                                <option>Anniversary</option>
                                <option>Events</option>
                            </select>
                        </div>

    <div class="form-group">
      <label for="product_price">Product Price</label>
      <input type="text" class="form-control" id="product_price" name="product_price" required>
    </div>

    <div class="form-group">
      <label for="product_desc">Product Description</label>
      <textarea class="form-control" id="product_desc" name="product_desc" rows="4" required></textarea>
    </div>

    <div class="form-group">
      <label for="product_image">Product Image</label>
      <input type="file" name="myfile" id="fileToUpload" required>
    </div>

    <div class="text-center">
      <?php echo $msg; ?>
      <br>
      <input type="submit" value="Add Product" name="addBtn" class="btn btn-primary mt-3" />
    </div>
  </form>
</div>
  </div>
</body>
</html>
<?php include "ad_footer.php"; ?>

