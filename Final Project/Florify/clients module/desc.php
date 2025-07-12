<?php
session_start();
    if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $con = mysqli_connect("localhost","root","","florifydb");
    $qry = "select * from product where product_id=$pid";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Anniversary-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include_once("header.php");
                ?>
            </div>
        </div>
        <div class="box1">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $row[4]; ?>" width="40%" height="400px" />
                </div>
                <div class="col-sm-8">
                    <div class="row"><div class="col-sm-12">
                        <label><?php echo $row[1]; ?></label>
                    </div></div>
                    <div class="row"><div class="col-sm-12">
                        <label>Price : <?php echo $row[2]; ?></label>
                    </div></div>
                    <div class="row"><div class="col-sm-12">
                        <h3>Desicription</h3>
                        <p><?php echo $row[3]; ?></p>
                    </div></div>
                    <div class="row" style="margin-top: 20px;"><div class="col-sm-16">
                        <a class='btn btn-success' href="mycart.php?pid=<?php echo $row[0]; ?>">Add To Cart</a>
                    </div></div>
                </div>
            </div>
        </div>


        <footer class= "footer_backgorund">
            <?php
            include_once("footer.php");
            ?>
        </footer>
</div>
</body>
</html>