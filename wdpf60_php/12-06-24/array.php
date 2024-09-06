<?php
// numeric indexed array
$rivers=array("padma","meghna","surma","jamuna");
echo "<pre>";
print_r($rivers);
// if i don't give index number it will take the sequence number autonamtically.or if give specific number it take the same number.
$rivers[10] ="tista";
$rivers[11]="Gomti";
print_r($rivers);




// associative array
$capital=["Bangladesh"=>"Dhaka","Sri lanka"=>"Colombo","Nepal"=>"katmandu"];
$capital["Bhutan"]="Thimpu";
print_r($capital);

?>