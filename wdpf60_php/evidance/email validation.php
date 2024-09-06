<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>email validation</h1>
<?php
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "email is not ok";
    }else{
        echo "email is ok";
    }

}

?>
<form method="post" >
    <input type="text" name="email" placeholder="Enter email"> <br>
    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>

