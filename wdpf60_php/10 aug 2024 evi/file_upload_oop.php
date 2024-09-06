<?php
include_once "file_class.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_upload_oop</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $info=$_FILES['file'];
        $obj=new File($info);
        $obj->upload();
    
    }
    
    ?>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="file" id=""> <br>
    <input type="submit" name="submit" value="Upload">
    </form>
    
</body>
</html>