<?php
$states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
echo "<pre>";
echo "<br>";
print_r($states);
$stateFrequency = array_count_values($states);
echo "<pre>";
echo "<br>";
print_r($stateFrequency);

?>