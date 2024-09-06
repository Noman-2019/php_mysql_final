<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product entry</title>
</head>
<body>
    <h3>Product Entry</h3>
    <?php
    //category list collect
    $sql="SELECT * FROM catagories";

    $cats=$db->query($sql);


    if (isset($_POST['submit'])) {
        extract($_POST);
        
        
        $sql="INSERT INTO product (id,product_name,product_details,product_price,product_quantity,product_category) VALUES (NULL,'$pn','$pd','$price','$quan','$cats')";

        // require_once"dbconfig.php";
        $result=$db->query($sql);
        // echo $db->affected_rows;
        if($db->affected_rows){
                echo "successfully added";
        }else{
            echo "failed";
        }


    }
    
    ?>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>product Entry</legend>
     Product Name:<input type="text" name="pn" id="" placeholder="Enter Product Name"><br><br>
    Product Details:<textarea name="pd" id="" placeholder="Enter Product Details"></textarea><br><br>
   Product Price:<input type="text" name="price" id="" placeholder="Enter Product Price"><br><br>
    Product Quantity:<input type="text" name="quan" id="" placeholder="Enter product Quantity"><br><br>
   
    Category:<select name="cats" id="">
            <option value="">select one</option>
            <?php
            while ($row=$cats->fetch_assoc()) {?>
                 "<option value="<?php echo $row['cat_id']?>"><?php echo $row['cat_name']?></option>"
            <?php }?>
            

    </select><br><br>
    <input type="submit" value="submit" name="submit">

    </fieldset>

    </form>

    <a href="allproducts.php">product list</a>

</body>
</html>