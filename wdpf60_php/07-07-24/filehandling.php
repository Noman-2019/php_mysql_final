<?php
 $fh = fopen('files/user.txt','r');
 // While the end-of-file hasn't been reached, retrieve the next line
//  while (!feof($fh)) echo fgets($fh);
 // Close the file
//  fclose($fh);
// print_r($fh);
// echo fgets($fh);
while(!feof($fh)){
    echo fgets($fh). "<br>";
};
fclose($fh);
?>
<?php
 $fh = fopen('files/user.txt','a');
 fwrite($fh,'<br>Hello everybody');
 fclose($fh);
 $fh = fopen('files/user.txt','r');
 while(!feof($fh)){
    echo fgets($fh). "<br>";
}
fclose($fh);
unlink("files/user.txt");

?>