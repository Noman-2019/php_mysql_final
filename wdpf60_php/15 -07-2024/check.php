<?php
$useremail="nomandiu2019@gmail.com";
$userPass="123456";
$email=$_POST['email'];
// echo "<br>";
$password=$_POST['password'];
// echo "<br>";
if($email==$useremail && $password==$userPass){
    session_start();
    $_SESSION['email']=$email;
    // print_r($_SESSION);
    header("Location:homeee.php");
}else{
    header("location:loginseesion.php");
}

?>