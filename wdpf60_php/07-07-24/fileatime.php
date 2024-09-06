<?php
 $file = 'files/user.txt';
 printf("File last accessed: %s",date("m-d-y g:i:sa",fileatime($file)));
//  echo date("m-d-y g:i:sa",fileatime($file));
?>