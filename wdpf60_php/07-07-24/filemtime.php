<?php
 $file = 'files/user.txt';
 echo "Last changed time: ".date("m-d-y g:i:sa", filectime($file))."<br>";
 echo "Last Modified time: ".date("m-d-y g:i:sa", filemtime($file))."<br>";
 echo "Last Access time: ".date("m-d-y g:i:sa", fileatime($file))."<br>";
?>