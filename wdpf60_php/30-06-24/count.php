<?php
$fruits=array("apple","orange","banana");
echo count($fruits);
echo "<br>";
$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo count($locations);
echo "<br>";
$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo count($locations,1);
echo "<br>";
$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo sizeof($locations,1);
// sizeof and count is similar works
?>