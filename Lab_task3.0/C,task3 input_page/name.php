
<!DOCTYPE html>	
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>
				Name
			</legend>
			<input type="text" name="name" value="<?php

if (isset($_post['submit'])) {
	$name =$_post['name'];
    echo $name;
}
?>
">
			<hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>

