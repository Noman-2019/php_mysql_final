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
        <input type="text" name="max1" placeholder="enter a number"> <br>
        <input type="text" name="max2" placeholder="enter a number"> <br>
        <input type="submit" value="submit" name="submit">
    </form>
<?php
if(isset($_POST['submit'])){
    $my=$_POST['max'];
    $me=$_POST['max1'];
    $im=$_POST['max2'];
    $myy=[$my,$me,$im];
    // $my=explode(",",$mp);
    // echo myfun($myy);
}
// function myfun($maxx){
    $max=$myy[0];
    $min=$myy[0];
    for($i=0;$i<count($myy);$i++){
        if($myy[$i]>$max){
            $max=$myy[$i];
        }
        if($myy<$min){
            $min=$myy[$i];

        }
    // }
    echo $max;
    echo $min;
}
?>    
</body>
</html>
