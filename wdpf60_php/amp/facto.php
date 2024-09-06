<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="number" name="numb" id="">
<input type="submit" value="check" name="submit">


</form>    
<?php
if (isset($_POST['submit'])) {
    $num=$_POST["numb"];
    echo fac($num);
}
function fac($num){
    $fact=1;
    for ($i=$num; $i > 1; $i--) { 
        $fact*=$i;
    }
    echo $fact."is the factorial of". $num; 
} 



?>
</body>
</html>