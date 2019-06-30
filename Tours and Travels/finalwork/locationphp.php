<?php


$Lname =$_GET["Lname"];
$Lcity =$_GET["Lcity"];
$operation = $_GET['Next'];

$conn = new mysqli("localhost", "root", "","toursandtravels");


	if($operation=="Next")
{
	$sql = "insert into locationdb (Lname,Lcity) values ('".$Lname."','".$Lcity."')";
	
}


$r = $conn->query($sql);
if($r==1)
{
	
	header("Location: hotelhtml.html");
}

?>