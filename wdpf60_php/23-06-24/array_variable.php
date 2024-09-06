<?php
function func(){
    $user[]="noman";
    $user[]="nomandiu2019@gmail.com";
    $user[]="bengali";
    return $user;
}
 list($name,$email,$language)=func();
 echo "Name :{$name}.,.Email :.{$email}.,Language :.{$language}"; 
?>
<?php
function retrieveUserProfile()
{
$user[] = "Jason Gilmore";
$user[] = "jason@example.com";
$user[] = "English";
return $user;
}
list($name, $email, $language) = retrieveUserProfile();
echo "Name:{$name}, email:{$email},language:{$language}";

?>
