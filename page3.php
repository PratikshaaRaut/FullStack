<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label> task 1</label><br>
        <label> enter the number </label><br>
        <input type="number" name="t1" value="$x" /><br>
        <button type="submit" name="b1" value="submit">submit </button>
       <br>
       <?php
       if(isset($_GET['b1']))
       {
         $x=(int) $_GET['t1'];; 
         echo "cube=".($x*$x*$x);
       }
       ?>
       <br><br>
       <label> task 2 </label><br>
       <label> enter the number </label><br>
       <input type="number" name="t2" value="$y"/><br>
       <button type="submit" name="b2" value="submit"> submit</button>
       <br>
       <?php
       if(isset($_GET['b2']))
       {
        $y=(int) $_GET['t2'];
        for($i=1;$i<=10;$i++)
        {
            echo "$y * $i =" .($i*$y)."<br>";
        }
       }
       ?>
       <br><br>
       <label>task 3</label> <br>
       <label> enetr the number </label> <br>
       <input type="number" name="t3" value="$r"/><br>
       <button type="submit" name="b3" value="sbumit"> submit </button>
       <br>
       <?php
       if(isset($_GET['b3']))
       {
        $r=(int) $_GET['t3'];
        $temp=1;
        for($i=1;$i<=$r;$i++)
        {
            $temp=$temp*$i;
        }
        echo ($temp);
       }
       ?>
       <br><br>
       <label>task 4 </label>
       <label> enter the number </label>
       <input type="number" name="t4" value="$a"/><br>
       <button type="submit" name="b4" value="sbumit"> submit </button>
       <br>
       <?php
       if(isset($_GET['b4']))
       {
        $a=(int) $_GET['t4'];
        $t=false;
        if($a<=1)
        {
            $t=true;
        }
        else{
        for($i=2;$i<=sqrt($a);$i++)
        {
           if($a%$i==0)
           {
            $t=false;
            break;
           }
        }
        }
        if ($t) {
            echo "$a is a prime number.";
        } else {
            echo "$a is not a prime number.";
        }
       }
       ?>
    </form>
</body>
</html>