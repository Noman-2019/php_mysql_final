<?php $db= new mysqli("localhopst,"root",","practice_1") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="">
        <input type="text" name="address" id="">
        <input type="text" name="mobile" id="">
        <input type="submit" value="insert" name="submit">
    </form>
    <?php 
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql="CALL inset_student('$name','$address','$mobile')";
        $result=$db->query($sql);
        if ($result) {
            echo "successfull";
        }else {
            echo "failed";
        }
    }
    
    ?>
</body>
</html>