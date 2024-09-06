<?php
$db=new mysqli("localhost","root","","practice_1");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name:<br><br>
        <input type="text" name="name" id="" placeholder="enter name"><br><br>
        password:<br><br>
        <input type="text" name="password" id="" placeholder="enter password"><br><br>
        <input type="submit" value="Check" name="submit">
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql="SELECT*FROM user WHERE name='$name' AND password='$password'";
        $result=$db->query($sql);
        if ($result->num_rows==0) {
            echo "login failed";
        }
        else{
            echo "login successfull";
        }
    }
    
    
    
    ?>
</body>
</html>