
<!DOCTYPE html>	
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>
				Email
			</legend>
			<input type="Email" name="Email" value="<?php

if (isset($_post['submit'])) {
	$Email = $_post['Email'];

    echo $Email;

}


?>">
			<hr/>
			<input type="submit" name="Submit" value="submit">
		</fieldset>
	</form>

</body>
</html>

