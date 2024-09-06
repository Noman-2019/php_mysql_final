<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="stid" >
            <option value="1">Noman</option>
            <option value="2">Men</option>
            <option value="3">SuperMan</option>
            <option value="4">Maan</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $file=$_POST['stid'];
        $obj = new student('student.txt');
        $obj->meth($stid);
    }
        class student{
            public $data;
            public $dat;
            public function __construct($file){
                $this->data=$file;
                $this->dat=file($this->data);
            }   
            public function meth($stid){
                foreach($this->datas as $data){
                    $line=explode("|",$data);
                    list($id,$name,$score,$result)=$line;
                    if($id==$stid){
                        $output=$id ."<br>";
                        $name ."<br>";
                        $score ."<br>";
                        $result;
                        break;
                    }
                }
                echo $output;
            }  
        }  
    ?>
</body>
</html>