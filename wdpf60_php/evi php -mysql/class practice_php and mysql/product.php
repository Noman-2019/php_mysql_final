<?php
$db=new mysqli("localhost","root","","tclk_wdpf_60")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>product price above 5000</h3>
    <?php $sql="SELECT * FROM product_price_above_5000";
       $result=$db->query($sql);
       ?>
<table border="1" style="border-collapse:collapse;">
<tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>manufacturer_id</th>
</tr>
<?php while ($row=$result->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['manufacturer_id']?></td>
    </tr>
<?php } ?>


</table>

</body>
</html>