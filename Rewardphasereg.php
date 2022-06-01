<?php
	$name = $_POST['Name'];
	$mobileno = $_POST['mobno'];
	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('sql113.epizy.com','epiz_31354540','rJTV9GX6mmerMK');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	 else {
		$stmt = $conn->prepare("insert into registrations(Name,MobileNo,Email) values(?, ?, ?)");
		$stmt->bind_param("sis", $name, $mobileno, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<meta http-equiv="refresh" content="3;url=http://www.google.com/" />
	<h2>Registered Successfully</h2>

</body>
</html>