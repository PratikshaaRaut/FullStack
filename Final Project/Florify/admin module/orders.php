<?php
$msg = "";
$msg2 = "";

if (isset($_POST['addproduct'])) {       
    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] === 0) {
        $fileName = basename($_FILES['myfile']['name']);
        $uploadFolder = "/florify/product_image/";
        $relativePath = $uploadFolder . $fileName;
        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . $relativePath;

        if (!is_dir(dirname($destinationPath))) {
            mkdir(dirname($destinationPath), 0755, true);
        }

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $destinationPath)) {
            $msg2 = "<font color='green'>File uploaded successfully!</font>";
        } else {
            $msg2 = "<font color='red'>Error in uploading file.</font>";
        }
    } else {
        $msg2 = "<font color='red'>No file selected or file upload error.</font>";
    }

    $Pname = $_POST['txtname'];
    $price = (float) $_POST['pricetxt'];
    $desc = $_POST['txtdesc'];
    $path = $relativePath;

    $con = mysqli_connect("localhost", "root", "", "florifydb");

    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($con, "INSERT INTO product (product_name, product_price, product_desc, product_image,) VALUES ('$Pname', $price, '$desc', $path)");
    mysqli_stmt_bind_param($stmt, "sisss", $Pname, $price, $desc, $path, );

    if (mysqli_stmt_execute($stmt)) {
        $msg = "<font color='green'>Product added successfully!</font>";
    } else {
        $msg = "<font color='red'>Error adding product: " . mysqli_error($con) . "</font>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_style.css" />   
     <link
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  rel="stylesheet"
/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
include("ad_header.php");
?>
<main>
<div class="container-fluid">
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Add new user</h1>
                <form class="form-group" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="txtname" class="form-control" value=""/>
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" name="pricetxt" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="txtdesc" rows="6" cols="50"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="myfile" id="fileToUpload">
                        </div>
                        <div style="text-align:center;">
                            <?php echo $msg."<br>"; ?>
                        <input  type="submit" value="Add" name="addproduct" class="btn-default loginbtn">
                        </div>
                </form>
</main>
<?php 
include("ad_footer.php");
?>
</body>
</html
