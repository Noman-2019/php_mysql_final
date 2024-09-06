<?php
$students=array("Tanim"=>20,"Saif"=>19,"Abdullah"=>22);

if(array_key_exists("Abdullah", $students)){
    echo "Abdullah got {$students['Abdullah']}";
}else{
    echo "Not found";
}


?>