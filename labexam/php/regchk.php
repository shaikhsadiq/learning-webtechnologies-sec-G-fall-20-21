<?php

if(isset($_POST['submit'])){
   $Id  = $_POST['id'];
   $pass = $_POST['password'];
   $cpas = $_POST['cpass'];
   $nm = $_POST['name'];
   $utype = $_POST['user'];

 if(!$Id == "" && !$pass == "" && !$cpas == "" && !$nm == "" && !$utype == "" ){
 	$myfile = fopen('test.txt', 'w');
    fwrite($myfile, $Id );
 	fwrite($myfile, $pass );
 	fwrite($myfile, $cpas );
 	fwrite($myfile, $nm );
 	fwrite($myfile, $utype );	
  
 	
 	
 	echo "reg com";

 }
 else{
 	echo "not registered......register again";
 }



}

?>