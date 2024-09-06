<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="text" name="max" placeholder="enter a number"> <br>
    
        <input type="submit" value="submit" name="submit">
    </form>
<?php
if(isset($_POST['submit'])){
    $my=$_POST['max'];
    $numArray=explode(",",$my);
    // echo myfun($my);
}
// function myfun($maxx){
    $max=$numArray[0];
    $min=$numArray[0];
    for($i=0;$i<count($numArray);$i++){
        if($numArray[$i]>$max){
            $max=$numArray[$i];
        }  
        if($numArray[$i]<$min){
            $min=$numArray[$i];
        }
    }
    echo "Among the numbers $my<br>";
    echo  $max." is the largest number<br>";
    echo  $min." is the lowest number";

?>    
</body>
</html>
