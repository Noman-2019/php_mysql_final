<?php  
$db=new mysqli("localhost","root","","evi_exam");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>q ans no -2</h3>
    <form action="" method="post">
        name:<input type="text" name="name" id="" placeholder="enter name"><br>
        Address: <textarea name="address" id="" placeholder="enter address"></textarea><br>
        contact:<input type="text" name="contact" id="" placeholder="enter contact number"><br>
        <input type="submit" value="Insert" name="submit">

    </form>
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql="CALL insert_manufacturer('$name','$address','$contact')";
        $result=$db->query($sql);
        if ($result) {
            echo "successfully inserted";
            header("location:manufacturer.php");
        }else {
            echo "failed";
        }
    }
    
    
    ?>
</body>
</html>
