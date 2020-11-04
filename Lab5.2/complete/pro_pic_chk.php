<?php
if(isset($_POST['submit']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

echo "<img src=".$filepath."height=1000 width=500/>";

} 
?>