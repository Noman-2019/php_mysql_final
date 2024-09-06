<?php
session_start();
if(!isset($_SESSION['email'])){
 header("Location:loginseesion.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
  <h1>Hello Noman</h1> 
  <a href="logout.php">Logout</a> 
</body>
</html>