<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Enter Marksr</label>
        <input type="number" name="t1" value="$x"/>
        <button type="submit" name="b1" value="submit">Submit</button>
        <br>
        <?php
        if(isset($_GET['b1'])){
            $x=$_GET['t1'];
        if ($x >= 90) { 
            $grade = "Grade A+"; 
        } elseif ($x >= 80) {
            $grade = "Grade A"; 
        } elseif ($x >= 70) { 
            $grade = "Grade B+"; 
        }
        elseif ($x >= 60) { 
            $grade = "Grade B"; } 

        elseif ($x >= 50) {
            $grade = "Grade C"; }

        else { $grade = "Fail"; 
        } echo "<h2>Your Grade: $grade</h2>";
    }
        ?>
    
    
</body>
</html>