<?php

$name = $_GET['i'];
$email = $_GET['i'];
$dob = $_GET['i'];
$blood = $_GET['i'];

$conn = mysqli_connect('localhost','root','','data');
$sql = "insert into user values('{$name}','{$email}','{$dob}',{'blood'})";
$res = mysqli_query($conn, $sql);




 ?>