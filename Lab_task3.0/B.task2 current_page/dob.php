<?php

if (isset($_post['submit'])) {
	$Date = $_post['Date'];

    echo $Date;

}


?>
<!DOCTYPE html>	
<html>
<head>
	<title>Date of birth</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Date_of_birth
			</legend>
			<input type="Date" name="Date">
			<hr/>
			<input type="submit" name="Submit" value="submit">
		</fieldset>
	</form>

</body>
</html>

