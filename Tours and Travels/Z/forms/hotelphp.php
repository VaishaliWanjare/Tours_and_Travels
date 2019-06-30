<?php

$HContact = $_GET["HContact"];
$Checkin =$_GET["Checkin"];
$Checkout =$_GET["Checkout"];
$Adults =$_GET["Adults"];
$Room =$_GET["Room"];
$Children =$_GET["Children"];
$SRoom =$_GET["SRoom"];
$DRoom =$_GET["DRoom"];
$Requirement =$_GET["Requirement"];
$Price =$_GET["Price"];
$operation = $_GET['Book'];

$conn = new mysqli("localhost", "root", "","toursandtravels");


if($operation=="Book")
{

	$sql = "update hoteldb set HContact=".$HContact." and Checkin='".$Checkin."' and Checkout='".$Checkout."' and Adults=".$Adults." and Room=".$Room." and Children=".$Children." and SRoom=".$SRoom." and DRoom=".$DRoom." and Requirement='".$Requirement."'and Price='".$Price."' where HContact=".$HContact."";

	
}


$r = $conn->query($sql);
if($r==1)
{
	
	echo"Alright..Booking is done.";
	header("Location: ../pages/contactus.html");
}

?>