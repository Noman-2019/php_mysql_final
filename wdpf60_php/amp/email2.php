<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="email" name="email" id="">
    <input type="submit" value="check" name="submit">

    </form>
    <?php
    if(isset($_POST["submit"])){
        $em=$_POST["email"];
        if (filter_var($em,FILTER_VALIDATE_EMAIL)) {
            echo "ok";
        }
        else{
            echo "not ok";
        }
    }
    ?>
</body>
</html>