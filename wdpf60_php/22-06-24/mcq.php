<?php
// date_default_timezone_set('Asia/Dhaka');
ini_set('date.timezone','Asia/Dhaka');
echo date("l d F Y : h:i:s");

?>
<?php
echo "<hr>" ;
echo "<br>";
$capitals=array("Dhaka"=>100,"Thimpu"=>200) ;
echo "the capital of Bangladesh is {$capitals['Dhaka']}";


?>