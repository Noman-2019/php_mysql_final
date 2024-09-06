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
<h3>all products (above 5000 price)</h3>
<?php
$data=$db->query("SELECT * FROM product_above_5000_price");
?>  
<table border="1" style="border-collapse: collapse;">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
</tr>

<?php  
while($row=$data->fetch_assoc()){?>
        <tr><td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['price'] ?></td></tr>
<?php } ?>
</table>
<a href="manufacturers.php">all_manufacturers</a>
</body>
</html>