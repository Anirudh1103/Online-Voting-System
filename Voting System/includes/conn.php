<?php
	$conn = new mysqli('localhost', 'root', '', 'votingsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>