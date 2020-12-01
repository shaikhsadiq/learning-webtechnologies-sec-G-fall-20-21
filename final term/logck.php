<?php
if(isset($_POST['submit'])){
    $uname = $_POST['unm'];
    $pas = $_POST['pass'];

if(!$uname == "" && !$pas == ""){
    $conn = mysqli_connect('localhost', 'root','','data');
   	$sql = "select * from employee where Password='$pas'";
   	$res = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($res);
   
   	

    if(count($row) > 0) {

       setcookie('isValid','true',time()+3600,'/');
       header('location: home.php');	
    }
    else{
    	header ('location: log.php');
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
<a href="log.php">Logout</a>
</body>
</html> 