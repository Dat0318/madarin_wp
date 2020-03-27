<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quan ky theme Options</title>
</head>
<body>
	<h1>Quan ky theme Options</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td>Email:</td>
				<td>
					<input type="text" name="email" value="<?php echo $email; ?>">
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="text" name="password" value="<?php echo $pass; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save-theme-option" value="Save Theme Option">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

 ?>