<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <select name="proid">
        <option >Choose one</option>
        <option value="1">lux</option>
        <option value="2">savlon</option>
        <option value="3">pear</option>
        <option value="4">tibbet</option>
    </select>
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $file=$_POST['proid'];
        $obj=new product('pro.txt');
        $obj->meth($file);
    }
    class product{
        public $data;
        public $arraydata; 
public function __construct($file) {
    $this->data=$file;
    $this->arraydata=file($this->data);
}

public function meth($file){
    foreach($this->arraydata as $data){
        $line=explode("|",$data);
        list($pid,$pname,$pprice)=$line;
        if($pid==$file){
            $output= "PID :".$pid."<br>".
            "PNAME :".$pname."<br>".
            "PRICE:".$pprice;
        }
    }
    echo $output;
}
    }
    
    ?>
</body>
</html>