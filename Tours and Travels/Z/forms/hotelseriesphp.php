<?php



$conn = new mysqli("localhost", "root", "","toursandtravels");

if (isset($_POST["submit80"]))
{	
	$sql = "insert into hoteldb (Hname,Price) values ('Hotel Western Taj',8000)";
}

if (isset($_POST["submit81"]))
{
	$sql = "insert into hoteldb (Hname,Price) values ('Hotel Dream land',9000)";
}

if (isset($_POST["submit82"]))
{
	$sql = "insert into hoteldb (Hname,Price) values ('Shininy Class Hotel',10000)";
	
}

if (isset($_POST["submit83"]))
{
	$sql = "insert into hoteldb (Hname,Price) values ('hotel star Fix',8800)";
	
}

if (isset($_POST["submit84"]))
{
	$sql = "insert into hoteldb (Hname,Price) values ('fabHotel Time square',11100)";
	
}

if (isset($_POST["submit85"]))
{
	$sql = "insert into hoteldb (Hname,Price) values ('Best Western O2',9000)";
	
}


$r = $conn->query($sql);
if($r==1)
{
	
	header("location: ../pages/hotelservices.html");
}

?>