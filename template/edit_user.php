<!DOCTYPE html>
<html>
<head>
	<title>Edit <?php echo $user['username'];?> profile</title>
</head>
<body>
<a href="index.php"><h4>Home</h4></a>
<form action="" method="post">
<input type="text" name="username" placeholder="username" value="<?php echo $user['username']; ?>"/><br>
<input type="password" name="password" placeholder="password" value="<?php echo $user['password']; ?>"/><br>
<input type="email" name="email" placeholder="email" value="<?php echo $user['email']; ?>"/><br>
<input type="submit" name="edit"  value="edit" />
</form>
</body>
</html>
