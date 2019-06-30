<?php


$conn = new mysqli("localhost", "root", "","toursandtravels");


	if (isset($_POST["submit99"]))
{
	
	$sql = "insert into locationdb (Lname,Lcity) values ('Goa','Goa')";
	
		
}else

	if (isset($_POST["submit98"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Kerala','Kerala')";
	
}else

	if (isset($_POST["submit97"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Jammu','Jammu')";
	
}else

	if (isset($_POST["submit96"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Kashmir','Kashmir')";
	
}else

	if (isset($_POST["submit95"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Agra','Agra')";
	
}else

	if (isset($_POST["submit94"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values('Delhi','Delhi')";
	
}else

	if (isset($_POST["submit93"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Gujrat','Gujrat')";
	
}else

	if (isset($_POST["submit92"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Rajasthan','Rajasthan')";
	
}else

	if (isset($_POST["submit91"]))
{
	$sql = "insert into locationdb (Lname,Lcity) values ('Shimla','Shimla')";
	
}

$r = $conn->query($sql);
if($r==1)
{
	header("location: ../forms/hotelseries.html");
}

?>