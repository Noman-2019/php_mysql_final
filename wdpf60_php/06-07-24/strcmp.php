<?php
$password="abcdE";
$password1= "abcde";

if(strcmp($password,$password1)==0){
    echo "Password matches";
}else{
echo "Password not matches";
}
// $x= strcmp($password,$password1);
// echo $x;

echo "<hr>";

if(strcasecmp($password,$password1)==0){
    echo "Password matches";
}else{
echo "Password not matches";
}

?>