<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" id="">
        <input type="submit" value="check" name="submit">

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $us=$_POST["user"];
        $pattern='/^[A-z0-9]+@[A-z]{4,8}$/';
        if(preg_match($pattern,$us)){
            echo "ok";
        }else{
            echo "not ok";
        }
    }
    
    
    ?>
</body>
</html>