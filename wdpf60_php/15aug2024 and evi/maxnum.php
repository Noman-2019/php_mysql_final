<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])) {
        $numbers=$_POST["num"];
        $numArray=explode(",",$numbers);

        $max=$numArray[0];
        $min=$numArray[0];

        for ($i=0; $i <count($numArray) ; $i++) { 
            if($numArray[$i]>$max){
                $max=$numArray[$i];
            }
            if($numArray[$i]<$min){
                $min=$numArray[$i];
            }
            }
            echo "<h3 style=color:red>$max is the largest number among $numbers<br><br></h3>";
            echo "<h3 style=color:green>$min is the smallest number among$numbers</h3>";

    }
    
    
    ?>
    <form method="post" >
        <input type="text" name="num" id="">
        <input type="submit" value="Check" name="submit">
    </form>
</body>
</html>