<?php
class file{
    public $fileinfo;
    public function __construct($me){
        $this->fileinfo=$me;
    }
    public function metho(){
        $info=$this->fileinfo;
        $name=$info["name"];
        $tmpName=$info["tmp_name"];
        $filesize=$info["size"];
        $allowedSize=409600; //400kb
        $fileExt=["pdf","png","jpg","docx"];
        $errors=array();
        $data=pathinfo($name);
        $ext=strtolower($data['extension']);

        if ($filesize>$allowedSize) {
            $errors[]="file size must be within 400kb";
        }
        if (!in_array($ext,$fileExt)) {
            $errors[]="only pdf,png,jpg,docx file are allowed";
        }if (count($errors)>0) {
            foreach ($errors as $err) {
                echo $err."<br>";
            }
        }
        else {
            if (move_uploaded_file($tmpName,"uploads/".$name)) {
                echo "uploaded successfully";
            }
        
        }
         
    
    }

}