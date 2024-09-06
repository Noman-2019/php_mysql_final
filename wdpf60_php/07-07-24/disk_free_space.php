<?php
 $drive = 'F:';
 echo disk_free_space($drive)/1024/1024/1024;
 $drive = 'E:';
 echo "<hr>";
 echo disk_free_space($drive)/1024/1024/1024;
?>