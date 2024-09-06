<!-- <?php
$count= 1;
while($count<51){
    echo $count ."<br>";
     $count++;   
}
?> -->
<?php
$count= 1;
$output="";
while($count<51){
    $output.= $count .", ";
     $count++;   
}
echo $output;
?>