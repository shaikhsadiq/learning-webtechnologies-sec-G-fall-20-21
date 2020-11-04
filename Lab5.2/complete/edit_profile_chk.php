<?php

if(isset($_POST['submit'])){

	$nm = $_POST['sname'];
    $eml = $_POST['Email'];
    $gen = $_POST['Gender'];
    $db  = $_POST['Date'];
    
    if(!$nm=="" && !$eml=="" && !$gen=="" && !$db==""){
    	session_start();
    	$_SESSION['Name']=$nm;
    	$_SESSION['Email']=$eml;
    	$_SESSION['Gender']=$gen;
    	$_SESSION['Birth']=$db;
    	header('location:dashboard.php');
    }
    else{
    	header('location:edit_profile.php');
    }
}



?>
