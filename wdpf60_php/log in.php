<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Name Validation</title>
    <style>
        .fast{
            color: green;
        }
    </style>
</head>
<body>
<form action="" method="post">    
<input type="text" name="gmail" placeholder="Enter User Name"><br>
<input type="submit" value="Submit" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
    $user = $_POST['gmail'];
    $pattern = '/^[a-z0-9]+@[A-z]{4,8}$/';
    
    if(preg_match($pattern, $user)){
       "<h3 class= fast>Log in Successfull</h3>";
    }else{
        echo "User name is invalid";
}

}

?>



</body>
</html>