<?php
$files=array("Picture1.JPG","picture2.jpg","PICTURE10.jpg", "picture20.jpg");
echo "<pre>";
print_r($files);

natsort($files);
echo "<hr>";
print_r($files);

natcasesort($files);
echo "<hr>";
print_r($files);

?>