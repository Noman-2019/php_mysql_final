<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// if(isset($_POST["submit"])){
// if($_SERVER['REQUEST_METHOD']=='POST'){
// $secretNumber = 453;
// if ($_POST['guess'] == $secretNumber) {
// echo "Congratulations!";
// }
// else{
//     echo "try again with another number";
// }
// }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $secretNumber = 500;
    if ($_POST['guess'] == $secretNumber) {
    echo "Congratulations!";
    }
    else if (abs($secretNumber -  $_POST['guess'])<10) {
        echo "you are getting close";
        }
    else{
        echo "try again with another number";
    }
    }
?>
<form action="" method="post">
    <input type="text" name="guess" id="">
    <input type="submit" value="SEND" name="submit">
</form> 
  


</body>
</html>