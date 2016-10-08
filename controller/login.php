<?php
if(isset($_SESSION['login']))
{
	header('Locatio:index.php');
	exit();
}

if(isset($_POST['login']))
{
	$username = clear($_POST['username']);
	$password = clear($_POST['password']);
	$password = salt($password);

	$sql = 'SELECT * FROM users WHERE username=:username AND password=:password';

	$query = $db->prepare($sql);

	$query->bindParam(':username',$username,PDO::PARAM_STR);
	$query->bindParam(':password',$password,PDO::PARAM_STR);
	$query->execute();

	$user = $query->rowCount();
	  if($user == 1)
	 {
 	$user_info = $query->fetch();
 	$_SESSION['login'] = $user_info['user_id'].str_shuffle('aswDS').salt($user_info['username'].$user_info['email']);
	 echo 'welcome'.' '.$user_info['username'];
	 echo '<meta http-equiv="refresh" content="2; url=index.php">';
	 //header('Location:index.php');
	 exit();
	 }
	 
}
else
{
	echo 'invalid data';
}


require_once 'template/login.php';
