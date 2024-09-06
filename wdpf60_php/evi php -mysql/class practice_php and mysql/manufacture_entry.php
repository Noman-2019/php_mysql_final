<?php
$db=new mysqli("localhost","root","","tclk_wdpf_60") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php  
if (isset($_POST['submit'])) {
    extract($_POST);
    $co="CALL add_manufacture('$name','$address','$tel')";
    $in=$db->query($co);
    if ($in) {
        echo "added";
    }else{
        echo "failed";
    }
}


?>
<body>
    <form action="" method="post">
        <input type="text" name="name" id=""><br>
        <textarea name="address" id=""></textarea><br>
        <input type="text" name="tel" id=""><br>
        <input type="submit" value="ADD" name="submit">
    </form>
    <a href="manufacturer.php">manufacturer list</a>
</body>
</html>