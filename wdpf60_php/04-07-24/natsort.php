<?php
$files=array("Picture1.JPG", "PICTURE10.jpg", "picture2.jpg", "PICTURE20.jpg");
echo "<pre>";
print_r($files);

natcasesort($files);
echo "<hr>";
print_r($files);

?>