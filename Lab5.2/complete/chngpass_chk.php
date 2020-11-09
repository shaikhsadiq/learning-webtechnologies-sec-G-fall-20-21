<?php
session_start();
  if (isset($_POST['submit'])) {
  	$crntpass = $_POST['cpass'];
  	$newpass  = $_POST['npass'];
  	$repass   = $_POST['rpass'];

  	if($newpass == $repass){
  		if($_SESSION['password'] == $crntpass){
  			$_SESSION['password'] = $newpass;
  			echo "password change successfull.....";


  		}
  		else{
  			echo "wrong password entered";
  		}


  	}
  	else{
  		echo "Re-Enter password";
  	}


  }

?>

<!DOCTYPE html>
    	<html>
    	<head>
    		<title></title>
    	</head>
    	<body>
          <h4>Now you can log in with new password</h4>  
    	      <a href="dashboard.php"> Dashboard</a>
    	</body>
    	</html>
