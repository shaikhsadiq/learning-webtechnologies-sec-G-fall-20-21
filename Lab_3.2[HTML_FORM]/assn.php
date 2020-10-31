<?php

if(isset($_REQUEST['submit'])){
	$name = $_REQUEST['sname'];
	$dob = $_REQUEST['Date'];
	$email = $_REQUEST['Email'];
	$gender = $_REQUEST['Gender'];
	$blood = $_REQUEST['Blood'];
	
	echo "Name::::::".$name. "<br>" ."Date_of_Birth::::::".$dob. "<br>"."Email::::::" .$email. "<br>". "Gender:::::".$gender. "<br>"."Blood_Group::::" .$blood. "<br>Degrees:" ;
	foreach($_REQUEST['check_print'] as $degree){
		echo $degree .",";
	}


	
}


?>