<?php
    // delete user == ok
    $user_id = (int)$_GET['user_id'];
    $sql = 'DELETE FROM users WHERE user_id=:user_id';
    $query = $db->prepare($sql);
    $query->bindparam('user_id',$user_id,PDO::PARAM_STR);
    $delete = $query->execute();
    if($delete == TRUE)
    {
        $_SESSION['success'] = 'user has been deleted  seccessfuly';
        header('location:index.php');
}
?>