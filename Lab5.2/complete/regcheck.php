<?php

if(isset($_POST['submit'])){
	$name  = $_POST['sname'];
	$email = $_POST['Email'];
    $Uname = $_POST['uname'];
    $pass  = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $gen   = $_POST['Gender'];
    $dob   = $_POST['Date'];
    


    if(!$name == "" && !$email == "" && !$Uname == "" && !$pass == "" && !$cpass == "" && !$gen == "" && !$dob == "" ){
    	echo "Registration complete<br>";

    	
    	    }

    else{
    	header ('location: registration.php?msg=null');


    }  
session_start();
$_SESSION['user_name']=$Uname;
$_SESSION['password']=$pass;
$_SESSION['Name']=$name;
$_SESSION['Email']=$email;
$_SESSION['Gender']=$gen;
$_SESSION['Birth']=$dob;

}   

?>

<!DOCTYPE html>
    	<html>
    	<head>
    		<title></title>
    	</head>
    	<body>
          <h4>Now you can log in as an user</h4>  
    	      <a href="public_home.html"> HOME</a>
    	</body>
    	</html>
