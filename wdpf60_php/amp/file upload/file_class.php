<?php
class files{
    public $fileinfo;

    public function __construct($x){
        $this->fileinfo=$x;
    }
public function doupload(){
    $info=$this->fileinfo;
    $name=$info['name'];
    $tmpName=$info["tmp_name"];
    $filesize=$info["size"];
    $allowedsize=409600;
    $allowedtype=["jpg","png","docx"];
    $data=pathinfo($name);
    $ext=strtolower($data['extension']);
    $error=[];

    if($filesize>$allowedsize){
        $error[]="filesize must be within 400kb";
    }
    if (!in_array($ext,$allowedtype)) {
        $error[]="only jpg,png,docs file are allowed";
    }
    if(count($error)>0){
        foreach($error as $err){
            echo "$err <br>"; 
        }
    }
    else {
        if (move_uploaded_file($tmpName,"upload/".$name)) {
            echo "file uploaded successfully";
        }
    }

}
}

?>