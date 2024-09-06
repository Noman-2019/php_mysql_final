<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="">
        <input type="submit" value="uplod" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $nam=$_FILES['photo'];
        $obj=new files($nam);
        $obj->meth();
    }
    class files{
        public $fileinfo;
        public function __construct($x){
            $this->fileinfo=$x;
        }
        public function meth(){
            $info=$this->fileinfo;
            $name=$info['name'];
            $tmpName=$info['tmp_name'];
            $size=$info['size'];
            $allowedsize=409600;
            $allowedtype=["jpg","jpeg","png","png"];
            $error=[];
            $data=pathinfo($name);
            $ext=strtolower($data['extension']);

            if($size>$allowedsize){
                $error[]="over size";
            }
            if(!in_array($ext,$allowedtype)){
                $error[]="file type not allowed";
            }
            if(Count($error)>0){
                foreach ($error as $err) {
                    echo "$err <br>";
                }
            }else {
                if (move_uploaded_file($tmpName,"uploads/".$name)) {
                    echo "uploaded successully";
                }
            }
            
    }
}
    
    ?>
</body>
</html>