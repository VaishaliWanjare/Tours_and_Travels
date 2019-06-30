<?php


$Hname =$_GET["Hname"];
$Night =$_GET["Night"];
$SRoom =$_GET["SRoom"];
$DRoom =$_GET["DRoom"];
$Rating =$_GET["Rating"];
$Requirement =$_GET["Requirement"];
$operation = $_GET['Next'];

$conn = new mysqli("localhost", "root", "","toursandtravels");

if($operation=="Next")
{
	$sql = "insert into hoteldb (Hname,Night,SRoom,DRoom,Rating,Requirement) values ('".$Hname."',".$Night.",".$SRoom.",".$DRoom.",'".$Rating."','".$Requirement."')";
}


$r = $conn->query($sql);
if($r==1)
{
	
	echo"Welcome u have successfully created a Account.";
}

?>