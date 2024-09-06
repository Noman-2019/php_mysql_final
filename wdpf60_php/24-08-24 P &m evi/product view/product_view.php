<?php
require_once "product_list.php";



// $sql="SELECT * FROM  product";
// echo "SELECT * FROM  product,catagories WHERE catagories.cat_id=product_category";
$sql="SELECT * FROM  product_above_5000_price";
$data = $db->query($sql);?>
<table border="1" style="border-collapse:collapse; width: 100px;">
<tr>
    <th>ID</th>
    <th>product Name</th>
    <th>product price</th>
    <th>manufacturer id</th>
</tr>

<?php
// echo "<pre>";
// print_r($row);
while ($row = $data->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['manufacturer_id']?></td>
        </tr>



<?php
}

?>

</table>



