<?php
if(isset($_POST['submit'])){
    $nm = $_POST['name'];
    $pass = $_POST['pass'];

if(!$nm == "" && !$pass == ""){
    $conn = mysqli_connect('localhost', 'root','','data');
   	$sql = "select * from user where NAME='$nm' and PASSWORD='$pass'";
   	$res = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($res);
   
   	

    if(count($row) > 0) {

       setcookie('isValid','true',time()+3600,'/');
       header('location: home.php');	
    }
    else{
    	header ('location: login.php');
    }

    }
    else{
    	
    	echo "field empty";
    }

   }


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
<a href="login.php">Logout</a>
</body>
</html> 