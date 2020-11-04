<?php
session_start();
echo "Name:".$_SESSION['Name']."<br>";
echo "Email:".$_SESSION['Email']."<br>";
echo "Gender:".$_SESSION['Gender']."<br>";
echo "Date_of_birth:".$_SESSION['Birth']."<br>";


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>

<body>

    <a href="edit_profile.php">Edit Profile</a><br><br>
    
</body>
</html>