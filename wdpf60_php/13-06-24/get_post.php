

<a href="get_post.php?name=Masud&email=masud@gmail.com&address=Mirpur">Click here</a>

<?php
echo "<pre>";
// print_r($_GET);
// print_r($_POST);
echo "</pre>";
echo $_POST['email'];
echo "<br>";
echo $_POST['pswd'];

?>
<h1>post method</h1>
<form action="" method="post">

Email address:<br />
<input type="text" name="email" size="20" maxlength="50" value=""/>  <br/>
 

Password:<br /><input type="password" name="pswd" size="20" maxlength="15" value="" /> <br/>
<input type="submit" name="subscribe" value="subscribe!" /> 
</form>
<?php
echo "<hr>";
if(isset($_POST['subscribe1'])){
echo "</pre>";
echo $_POST['email1'];
echo "<br>";
echo $_POST['pswd1'];

}
// print_r($_GET);
// print_r($_POST);

?>
<h1>if isset post method</h1>
<form action="" method="post">

Email address:<br />
<input type="text" name="email1" size="20" maxlength="50" value=""/>  <br/>
 

Password:<br /><input type="password" name="pswd1" size="20" maxlength="15" value="" /> <br/>
<input type="submit" name="subscribe1" value="subscribe!" /> 
</form>
<?php
echo "<hr>";
if (isset($_REQUEST['subscribe2'])){
echo "</pre>";
echo $_REQUEST['email2'];
echo "<br>";
echo $_POST['pswd2'];

}
// print_r($_GET);
// print_r($_POST);

?>
<h1>if isset post request method</h1>
<form action="" method="post">

Email address:<br />
<input type="text" name="email2" size="20" maxlength="50" value=""/>  <br/>
 

Password:<br /><input type="password" name="pswd2" size="20" maxlength="15" value="" /> <br/>
<input type="submit" name="subscribe2" value="subscribe!" /> 
</form>
