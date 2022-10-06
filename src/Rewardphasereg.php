<html>
<head>
<META http-equiv="refresh" content="3;URL=/Rewardphasechoose.php">
</head>
<html>



<?php
	$name = $_POST['Name'];
	$mobileno = $_POST['mobno'];
	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('sql113.epizy.com','epiz_31354540','rJTV9GX6mmerMK','epiz_31354540_rewardphase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registrations(Name,MobileNo,Email) values(?, ?, ?)");
		$stmt->bind_param("sis", $name, $mobileno, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    ?>