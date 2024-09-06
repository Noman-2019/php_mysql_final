<?php 
$db=new mysqli("localhost","root","","evidance");
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
    $po=$_POST['manu'];
    $db->query("DELETE FROM manufacturer WHERE id='$po'");
if($db->affected_rows){
    echo "successfull";
}
else{
    echo "unsuccessfull";
}
}
?>

    <h3>all manufacturers</h3>
 <?php   
 $data=$db->query("SELECT* FROM manufacturer");
?>

<form action="" method="post">
<select name="manu" id="">
    <option value="">select one</option>
    <?php while ($row=$data->fetch_object()) {?>
        <option value="<?php echo $row->id ; ?>"><?php echo $row->name;?></option> 
    <?php } ?>
</select>
<input type="submit" value="DELETE" name="submit">
</form>
<a href="products.php">all_products</a>
</body>
</html>