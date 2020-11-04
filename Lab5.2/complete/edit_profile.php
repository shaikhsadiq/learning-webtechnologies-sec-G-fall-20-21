<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body >
	<form method="post" action="edit_profile_chk.php">
		<fieldset>
			
		Name:<input type="text" name="sname"> <br> <br>

		Email:<input type="Email" name="Email"> <br> <br>

		Gender:<input type="radio" name="Gender" value="Male"> Male<input type="radio" name="Gender" value="Female"> Female <input type="radio" name="Gender" value="Other"> Other <br> <br>

		Date Of Birth:<input type="Date" name="Date"> <br> <br>

		
		  <hr/>
		<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>