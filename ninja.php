<!DOCTYPE html>
<html>
<head>
	<title>index_Ninja Demo</title>
</head>
<body>

	<?php

	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$usrtel = $_POST['usrtel'];
	$ig = $_POST['ig'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	
	

	echo "<h1>Customer Information</h1>";

	echo "Customer First Name: " . $firstName;
	echo "Customer Last Name: " . $lasttName;
	echo "Customer Phone Number: " . $usrtel;
	echo "Customer Instagram: " . $ig;
	echo "Customer Email Address: " . $email;
	echo "Customer Birthday: " . $birthday;
	



	?>

</body>
</html>