<?php

$deptno =$_GET["deptno"];
$dname =$_GET["dname"];
$operation = $_GET['a'];
$conn = new mysqli("localhost", "root", "","IIT");


echo "Operation value " . $operation . "<br>";
if($operation=="add")
{	
	$sql = "insert into tabledept (deptname,deptno) values ('".$dname."',".$deptno.")";
}else if($operation=="delete"){
$sql = "delete from tabledept where deptno =".$deptno;
}else if($operation=="update"){
$sql = "update tabledept set deptname = '".$dname."' where deptno = ".$deptno;
}else if($operation=="View"){
$sql = "select * from tabledept";
}


$r = $conn->query($sql);





if($r==1)
{
	
	echo "Successfully created";
}


?>