<?php
include_once"file_class.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="upload" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $file=$_POST["file"];
        $obj=new files($file);
        $obj->doupload();
    }
    
    ?>
</body>
</html>