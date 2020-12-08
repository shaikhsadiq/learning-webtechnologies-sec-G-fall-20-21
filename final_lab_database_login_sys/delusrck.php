<?php
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	if(!$id == "" ){
$conn = mysqli_connect('localhost','root','','data');
        $sql = "delete from user where ID=$id";
        $res = mysqli_query($conn, $sql);
        echo "deleted";
	}
	else{
		include 'delusr.php';
		echo "field Empty";
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