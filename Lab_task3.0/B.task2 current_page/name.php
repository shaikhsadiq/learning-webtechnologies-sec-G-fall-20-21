<?php

if (isset($_post['submit'])) {
	$name =$_post['Name'];

    echo $Name;

}


?>



<!DOCTYPE html>	
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method= "post" >
		<fieldset>
			<legend>
				Name
			</legend>
			<input type="text" name="Name">
			<hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>

