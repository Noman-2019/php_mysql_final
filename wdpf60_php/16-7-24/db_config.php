<?php
$host= "localhost";
$user="root";
$pass="";
$db="wdpf60";

@$con=new mysqli($host,$user,$pass,$db);
if($con->connect_errno){
    echo "failed to connect to mysql: ".$con->connect_errno;
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
  <h1>Hello Noman</h1> 
    <?php
    
    $data=$con->query("SELECT * FROM students");
    $output=$data->fetch_assoc();
    echo "<pre>";
    print_r($output);
    
    ?>
</body>
</html>

