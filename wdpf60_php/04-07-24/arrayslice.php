<?php
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
$subset = array_slice($states, 4);
echo "<pre>";
print_r($subset);

?>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
$subset = array_slice($states, 4,2);
echo "<pre>";
echo "<hr>";
print_r($subset);

?>
<?php

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
$subset = array_slice($states,1,-3);
echo "<pre>";
echo "<hr>";
print_r($subset);

?>