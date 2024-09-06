<?php
$capital=array("Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo", "Australia"=>"canbera","newzealand"=>"willington");
echo "<pre>";
print_r($capital);

ksort($capital);
echo "<hr>";
print_r($capital);

?>