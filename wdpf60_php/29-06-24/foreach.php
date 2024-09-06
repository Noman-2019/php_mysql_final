<?php
$fruits=["mango","orange","jackfruit","apple"];
foreach($fruits as $c){
    echo $c."<br>";
}
// associative array
echo "<hr>";
$students=array("Tanim"=>20,"Saif"=>19,"Abdullah"=>22,);
foreach($students as $key=>$value){
    echo "$key : $value <br>";
}
?>