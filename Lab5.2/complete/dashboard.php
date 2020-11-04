
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>

<body>

<h1 align="left">X Company</h1>

<h1 align="center">Welcome
<?php
session_start();
echo $_SESSION['user_name'];
?>

</h1>
<h4 align="right">logged in as
<?php
echo $_SESSION['user_name'];
?>
<br>
<a href="public_home.html">Logout</a>
</h4>

<h2>Account</h2> 
<a href="dashboard.php">Dashboard </a><br>
<a href="view_profile.php">View Profile</a><br>
<a href="edit_profile.php">Edit Profile</a><br>
<a href="profile_pic.html">Change Profile Picture</a><br>
<a href="public_home.html">Logout</a>
</body>
</html>