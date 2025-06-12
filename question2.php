<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Enter the marks of subject Out Of Hundred</h2>
    <form method="get">
        <label>Subject 1</label> <input type="number" name="t1" value="$a"/><br>
         <label>Subject 2</label> <input type="number" name="t2" value="$b"/><br>
          <label>Subject 3</label> <input type="number" name="t3" value="$c"/><br>
           <label>Subject 4</label> <input type="number" name="t4" value="$d"/><br>
            <label>Subject 5</label> <input type="number" name="t5" value="$e"/><br>

        <button type="submit" name="b1" value="submit">Submit</button>
        <br>
        <?php
        if(isset($_GET['b1'])){
            $a=$_GET['t1'];
            $b=$_GET['t2'];
            $c=$_GET['t3'];
            $d=$_GET['t4'];
            $e=$_GET['t5'];
            echo "Total Marks=".($a+$b+$c+$d+$e);
            echo "Percentage=".((($a+$b+$c+$d+$e)/500)*100);
        }
        ?>
</body>
</html>