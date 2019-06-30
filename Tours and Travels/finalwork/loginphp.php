<?php
session_start();
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$Username = stripslashes('Username')
	$Password = stripslashes('Password');


	Mysql_connect("localhost","root","","toursandtravels");

	$sql= "select $Username, $Password from registrationdb where Username='".$Username."' and Password='".$Password."'";
	$result= $conn->query($sql);

	$row= $result->fetch_assoc();

	if($row['Username']==$Username && $row['Password']==$Password)
	{
		echo "Login successful!!! welcome" ;
		header('location:registerhtml.html');
	}
	else{
		echo "Failed to login";
		}
?>		