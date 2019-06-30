<?php

$LContact =$_GET["LContact"];
$RecieveFrom =$_GET["RecieveFrom"];
$RecieveBy =$_GET["RecieveBy"];

$operation = $_GET['Next'];

$conn = new mysqli("localhost", "root", "","toursandtravels");


	if($operation=="Next")
{
	
	$sql = "update locationdb set RecieveFrom='".$RecieveFrom."' and RecieveBy='".$RecieveBy."' where LContact=".$LContact."";
	
}

$r = $conn->query($sql);
if($r==1)
{
	header("location: hotelhtml.html");
}

?>

