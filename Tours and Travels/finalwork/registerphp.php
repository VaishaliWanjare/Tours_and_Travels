<?php


$Username =$_GET["Username"];
$Contact =$_GET["Contact"];
$Email =$_GET["Email"];
$Address =$_GET["Address"];
$City =$_GET["City"];
$Password =$_GET["Password"];
$operation = $_GET['Register'];


$conn = new mysqli("localhost", "root", "","toursandtravels");

if($operation=="Register")
{
	$sql = "insert into registrationdb (Username,Contact,Email,Address,City,Password) values ('".$Username."',".$Contact.",'".$Email."','".$Address."','".$City."','".$Password."')";
	 
}



$r = $conn->query($sql);
if($r==1)
{
	
	header("Location: locationhtml.html");
}

?>