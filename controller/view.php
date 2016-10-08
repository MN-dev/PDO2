<?php
    //view all users
    $sql = 'SELECT * FROM users ORDER BY user_id DESC';
    $query = $db->prepare($sql);
    $query->execute();
    $users = $query->fetchAll(); //defult fetch_both
    //pre($users);
    $total_users = $query->rowCount();
    if(isset($_SESSION['success']))
    {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    else
    {
        $success = NULL;
    }
    require_once 'template/users.php';
?>