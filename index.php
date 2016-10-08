<?php
session_start();
// server data
include_once'include/config.php';
// connect to database
include_once'include/db.php';
//unset($_SESSION['login']);
//salt
include_once'funcions/salt.php';
include_once'funcions/clear.php';

if(!isset($_SESSION['login']))
{
	require_once 'controller/login.php';
	exit();
} 
	$user_data = substr($_SESSION['login'],0,8);
	$user_id = (int) $user_data;
	$sql = 'SELECT * FROM users WHERE user_id=:user_id';
	$query = $db->prepare($sql);
	$query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
	$query->execute();

	$user_info = $query->fetch();
	//pre($user_info);
	//echo 'welcome'.' '.$user_info['username'];

// insert == ok
//Action
$action = (isset($_GET['action']) ? $_GET['action'] : NULL);
if($action == 'add')
{
	require_once 'controller/add_user.php';
}
elseif ($action == 'delete')
{
   require_once 'controller/delete.php';
}
elseif($action == 'edit') {
require_once 'controller/edit.php'; 
}
elseif($action == 'view')
{
	  require_once 'controller/profile.php';
}
elseif ($action == 'logout') {
	// go to logout page
	require_once 'controller/logout.php';
}
else
{ //view all users
    require_once 'controller/users.php';
}

function pre($array){
	echo "<pre>";
	print_r($array);
	echo "<pre>";
}
?>