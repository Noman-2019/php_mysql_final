<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ANswer to the question no.2</h1>
    <form method="post">
    <select name="stuid">
        <option >Choose one</option>
        <option value="1">Rakib</option>
        <option value="2">Sakib</option>
        <option value="3">jahid</option>
        <option value="4">sadik</option>
    </select>
    <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
    if(isset($_POST['submit'])){
        $file=$_POST['stuid'];
        $obj=new student('stu.txt');
        $obj->meth($file);
    }
    class student{
        public $data;
        public $arraydata; 
public function __construct($file) {
    $this->data=$file;
    $this->arraydata=file($this->data);
}

function meth($file){
    foreach($this->arraydata as $data){
        $line=explode("|",$data);
        list($sid,$sname,$sbatch)=$line;
        if($sid==$file){
            $output= "Student ID :".$sid."<br>".
            "Student NAME :".$sname."<br>".
            "Batch:".$sbatch;
        }
    }
    echo $output;
}
    }
    
    ?>
</body>
</html>