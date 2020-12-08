<?php

$conn = mysqli_connect('localhost','root','','data');
$sql = "select * from user";
$res = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	
<?php while($data = mysqli_fetch_assoc($res)){ ?>

			<tr>
				<td><?=$data['ID']?></td>
				<td><?=$data['NAME']?></td>
				<td><?=$data['EMAIL']?></td>
				<td><?=$data['PASSWORD']?></td>
				
			</tr>
	<?php } ?>

<a href="home.php">Back</a>
</table>
</body>
</html>