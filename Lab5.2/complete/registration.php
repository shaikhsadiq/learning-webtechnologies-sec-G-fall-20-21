<?php
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body >
	<form method="post" action="regcheck.php">
		<fieldset>
			
		Name:<input type="text" name="sname"> <br> <br>

		Email:<input type="Email" name="Email"> <br> <br>

		User Name:<input type="te" name="uname"><br> <br>

		Password:<input type="password" name="password"><br> <br>

        Confirm Password:<input type="password" name="cpassword"><br> <br>


		Gender:<input type="radio" name="Gender" value="Male"> Male<input type="radio" name="Gender" value="Female"> Female <input type="radio" name="Gender" value="Other"> Other <br> <br>

		Date Of Birth:<input type="Date" name="Date"> <br> <br>

		
		  <hr/>
		<input type="submit" name="submit" value="submit">
		<input type="reset" value="reset">
		</fieldset>
	</form>
</body>
</html>