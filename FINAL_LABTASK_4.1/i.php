<?php

$name = $_GET['i'];
$email = $_GET['i'];
$dob = $_GET['i'];
$blood = $_GET['i'];

$conn = mysqli_connect('localhost','root','','data');
$sql = "insert into user values('{$id}','{$name}','{$email}','{$pass}')";
$res = mysqli_query($conn, $sql);




 ?>