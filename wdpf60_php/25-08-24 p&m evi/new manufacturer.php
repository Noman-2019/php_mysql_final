 <?php
 $db=new mysqli("localhost:3310","root","","evidance")
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    $db->query("CALL add_Manufacturer('$name','$address','$contact')");

    // if ($db->affected_rows) {
        
    // }


}


?>




<form action="" method="post">
<input type="text" name="name" id="" placeholder="enter manufacturer name">
<textarea name="address" id="" placeholder="enter address"></textarea>
<input type="text" name="contact" id="">
<input type="submit" value="SUBMIT" name="submit">

</form>    
</body>
</html>