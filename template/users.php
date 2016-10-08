<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<style>
		*{
			padding: 0;
			border-spacing: 0;
		}
		table{
			width: 100%;
		}
		td,th{
			text-align: center;
			border:2px solid #eee;
		}
		h4{
			color: red;
			background: ;
			background-color: yellow;
			width: 100px;
			border-left: 5px;

		}
	</style>
</head>
<body>
<!-- success -->
<?php  if ($success) { ?>
	<div style="color:green"> <?php echo $success; ?></div>
<?php } ?>

<a href="?action=add">add new user</a>
<a href="?action=logout" style="float:right">Log Out</a>
<table>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Email</th>
		<th>Edit | Delete</th>
	</tr>
	<?php if ($total_users == 0) { ?>
		<tr>
			<td colspan ="4"> There is no users until now </td>
		</tr>
		<?php }else{ 
			foreach ($users as $user){ ?> 
		<tr>
			<td><?php echo $user['user_id'];	?> </td>
			<td>
			<a href="?action=view&user_id=<?php echo $user['user_id']; ?>"><?php echo $user['username']; ?></a>
			</td>
			<td><?php echo $user['email'];		?> </td>
			<td> <a href="?action=edit&user_id=<?php echo $user['user_id']; ?>">Edit</a> |
			 <a href="?action=delete&user_id=<?php echo $user['user_id']; ?>">Delete</a></td> 
		</tr>
				<?php } ?> <!-- end of foreach Loop-->

				<?php } ?> <!-- end of Else-->
				
	
</table>
</body>
</html>