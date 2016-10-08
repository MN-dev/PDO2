<!DOCTYPE html>
<html>
<head>
	<title><?php echo $user['username'];?>'s profile</title>
</head>
<body>

<h1>view <?php echo $user['username'];?> 's profile</h1>
<div>
	ID : <?php echo $user['user_id'];?>
	</div>

<div>
	Name : <?php echo $user['username'];?>
	</div>

<div>
	Email : <?php echo $user['email'];?>
	</div>

<div>
<a href="?action=edit&user_id=<?php echo $user['user_id'];?>">Edit</a> |
<a href="?action=delete&user_id=<?php echo $user['user_id'];?>">Delete</a> |
	</div>

</body>
</html>