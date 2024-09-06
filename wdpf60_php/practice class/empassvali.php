<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="email" id=""><br>
        <input type="password" name="pass" id="">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "email is wrong";
        }else if(strlen($pass)<6){
            echo "pass is short";
        }
        
        else{
            echo "log in valid";
        
    }
  }
    ?>
</body>
</html>