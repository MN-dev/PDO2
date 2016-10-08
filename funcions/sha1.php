<?php


$e = "admin";
function salt($password)
{
$salt = 'weQWEqwrewtwerewegfhdsccbvzcxckiutrgfiouiugfdfASERWASDZFDTESRDZX5452107964132548';
$new_password = sha1($password.$salt);
return $new_password;
}
echo salt($e);
?>