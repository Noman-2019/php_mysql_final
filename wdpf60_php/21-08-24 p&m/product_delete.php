<?php

$re=$_GET['id'];

// echo $re;


require_once "dbconfig.php";

$result=$db->query("DELETE FROM product WHERE id='$re'");

if($result){

header("location:allproducts.php");
}
?>