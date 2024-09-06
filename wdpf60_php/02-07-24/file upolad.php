<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])) {
    $temp=$_FILES['photo']['tmp_name'];
    $filename = $_FILES['photo']['name'];//aic-home.jpeg
    $filesize = $_FILES['photo']['size'];
    $filedata = pathinfo($filename);
    echo $filedata['extension'];
    $file_ext=strtolower($filedata['extension']);
    $allowed_ext=["jpg","jpeg","png"];
    $path="photos/".$filename;
    $allowedsize=512000;
    $errors=[];
    if(!in_array($file_ext,$allowed_ext)) {
        $errors[]= "Allowed file type,jpg,jpeg,png";
    }

    if($filesize>$allowedsize){
        $errors[]="within 50 Kb is allowed";
    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err."<br>";
        }
    } else {
        $status = move_uploaded_file($temp,$path);
        if($status)echo "Succesfully Upload";
    }

}

// print_r($_POST);
// echo"<hr>";
// print_r($_FILES);

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="file" name="photo" id=""><br>
        <input type="submit" name="submit" value="SEND">
    </form>

</body>
</html>