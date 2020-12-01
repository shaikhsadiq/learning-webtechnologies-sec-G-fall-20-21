<?php
if(isset($_POST['submit'])){
	$ename = $_POST['enm'];
	$cname = $_POST['cnm'];
	$conum = $_POST['cnum'];
	$uname = $_POST['unm'];
    $pas = $_POST['pass'];

     if(!$ename == "" && !$cname == "" && !$conum == "" && !$uname == "" && !$pas == ""){
 	    $conn = mysqli_connect('localhost','root','','data');
        $sql = "insert into employee values('{$ename}','{$cname}','{$conum}','{$uname}' ,'{$pas}')";
        $res = mysqli_query($conn, $sql);
        echo "added";
         }
         else{
         	include 'reg.php';
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
<a href="log.php">Back</a>

</body>
</html>