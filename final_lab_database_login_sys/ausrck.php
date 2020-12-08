<?php
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['nm'];
	$email = $_POST['eml'];
	$pass = $_POST['pass'];

     if(!$id == "" && !$name == "" && !$email == "" && !$pass == ""){
 	    $conn = mysqli_connect('localhost','root','','data');
        $sql = "insert into user values('{$id}','{$name}','{$email}','{$pass}')";
        $res = mysqli_query($conn, $sql);
        echo "added";
         }
         else{
         	include 'addusr.php';
         	echo "field empty";
         	
         }

}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
<a href="home.php">Back</a>

</body>
</html>