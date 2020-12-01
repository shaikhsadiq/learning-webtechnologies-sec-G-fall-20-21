<?php
if(!isset($_COOKIE['isValid']))
{
	header('location: log.php');
}



?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome</h1>
	
    <a href="allusr.php">Show All User List</a><br>
    <a href="Delusr.php">Delete User</a><br>
    <a href="login.php">Logout</a>
</body>
</html>