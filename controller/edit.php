<?php
    // edit == ok
$user_id = (int)$_GET['user_id'];
 if (isset($_POST['edit']))
 	{
 		$username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];

        $sql = 'UPDATE users SET username=:username , password=:password , email=:email WHERE user_id=:user_id';
        
        $query = $db->prepare($sql);
        $query->bindParam('username',$username,PDO::PARAM_STR);
        $query->bindParam('password',$password,PDO::PARAM_STR);
        $query->bindParam('email',$email,PDO::PARAM_STR);
        $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
        $update = $query->execute();
        if ($update == TRUE)
	    {
        $_SESSION['success'] = 'user data  has been edited  seccessfuly';
        header('location:index.php');
	    }
    } 
$user_id = (int)$_GET['user_id'];
$sql ='SELECT * FROM users WHERE user_id=:user_id';
$query = $db->prepare($sql);
$query->bindParam('user_id',$user_id,PDO::PARAM_STR);
$query->execute();
$user = $query->fetch();
//pre($user);  
require_once 'template/edit_user.php';
//require_once 'controller/edit.php'; 
$user_id = (int)$_GET['user_id'];
$sql ='SELECT * FROM users WHERE user_id=:user_id';
$query = $db->prepare($sql);
$query->bindParam('user_id',$user_id,PDO::PARAM_STR);
$query->execute();
$user = $query->fetch();
  //pre($user); 
    require_once 'template/edit_user.php';
?>