<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	//Generate password based on the user credentials entered.
	$i = 0;
	$j = 0;
	$c1 = '';
	$c2 = '';
	while($i <= 3)
	{
		$c1 = $c1 . $firstName[$i];
		$i++;

	}
	while($j <= 3)
	{
		$c2 = $c2 . $number[$j];
		$j++;

	}
	$c3 = $c1 . $c2;
	$password = $c3;

	//Generating Voters id
	
	$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$voter = substr(str_shuffle($set), 0, 15);

	// Database connection
	include 'D:\Xaamp\htdocs\ovmv2\votingsystem\admin\includes\conn.php';
	// $conn = new mysqli('localhost','root','','votingsystem');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into voters(voters_id,password,firstName, lastName, email, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi",$voter,$password, $firstName, $lastName,  $email, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>