<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <label> gross salary of employee</label>
    <label> enter the salary of employee</label>
    <input type="number" name="t1" value="$x"/>
    <button type="submit" name="b1" value="sbumit"> submit </button>
    <?php
    if(isset($_GET['b1']))
    {
        $x=$_GET['t1'];
    $gross=0;
    if($x<20000)
    {
        $gross = $x + ($x * 0.10) + ($x * 0.15);
    }
    elseif($x>=20000 && $x<50000)
    {
        $gross = $x + ($x * 0.15) + ($x * 0.20); 
    }
    else
    {
        $gross = $x + ($x * 0.20) + ($x * 0.25);
    }
    echo $gross;
    }
    ?>
    </form>
</html>