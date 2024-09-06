<?php
$Country=array(
    "Bangladesh"=>"Dhaka",
    "Srilanka"=>"Colombo",
    "Ugnada"=>"Kampala",
    "Nepal"=>"Kathmandu",
    "Maldives"=> "Maley"
);
while($item=key($Country)){
    echo $item ."<br>";
    next($Country);
}
?>