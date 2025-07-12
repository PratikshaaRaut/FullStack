<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Florify</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #fff7f1;">

    <div class="container-fluid px-4">
        <?php include_once("header.php"); ?>

        <div class="row justify-content-center mt-5">

            <div class="col-sm-3 text-center mb-4">
                <img src="flowerimg/emptycart.svg" style="width: 500px;" alt="Cart Image" />
            </div>

            <div class="col-sm-9">
                <?php
                if (isset($_COOKIE['cart'])) {
                    $pid = $_COOKIE['cart'];
                    $con = mysqli_connect("localhost", "root", "", "florifydb");
                    $qry = "SELECT * FROM product WHERE product_id IN ($pid)";
                    $result = mysqli_query($con, $qry);

                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-striped text-center'>";
                    echo "<caption><h2 class='mb-4'>Your Cart</h2></caption>";
                    echo "<thead class='thead-dark'><tr><th>Product Image</th><th>Product Name</th><th>Product Price</th></tr></thead>";
                    echo "<tbody>";

                    $total = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td><img src='$row[4]' width='60' height='60' alt='Product Image'/></td>";
                        echo "<td class='align-middle'>$row[1]</td>";
                        echo "<td class='align-middle'>₹$row[2]</td>";
                        echo "</tr>";
                        $total += $row[2];
                    }

                    $_SESSION['total'] = $total;

                    echo "<tr class='table-warning'><td colspan='2'><strong>Total Amount</strong></td><td><strong>₹$total</strong></td></tr>";
                    echo "</tbody></table></div>";

                    echo "<div class='d-flex justify-content-end'>";
                    echo "<a class='btn btn-success' href='shipping.php'>Place Order</a>";
                    echo "</div>";
                } else {
                    echo "<div class='text-center'><h4>Your cart is empty.</h4></div>";
                }
                ?>
                <br><br><br>
            </div>
        </div>

        <footer class="footer_background mt-5">
            <?php include_once("footer.php"); ?>
        </footer>
    </div>

</body>
</html>
