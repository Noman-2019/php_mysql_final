<?
$x = 5;
$y = 10;

function myTest() {
    $x=3;$y=2;
  $y = $x + $y;
  
} 

myTest();
echo $y;

echo"<pre>";
print_r($GLOBALS);
?>