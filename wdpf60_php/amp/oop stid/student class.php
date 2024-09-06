<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    <select name="stid" id="" >
        <option value="">choose one</option>
        <option value="1">noman</option>
        <option value="2">man</option>
        <option value="3">pnoman</option>
        <option value="4">wnoman</option>
    </select>
    <input type="submit" value="show result" name="submit">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $stid=$_POST['stid'];
    $obj=new file("stide.txt");
    $obj->meth($stid);
}
class file{
    public $stuinfo;
    public function __construct($y){
        $this->stuinfo=file($y);
    }
    public function meth($stid){
        foreach ($this->stuinfo as $dataa) {
            $line=explode("|",$dataa);
            list($id,$name,$batch,$score)=$line;
            if($id==$stid){
                $output="$id<br>$name<br>$batch<br>$score";
            }
        }
        echo "$output";
    }
}


?>