
<!DOCTYPE html>

<html lang="">

<head>
<title>Travelers Point | Pages </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<?php
$conn = new mysqli("localhost","root","","toursandtravels");
$Username =$_POST["Username"];
$Password =$_POST["Password"];
$res=mysqli_query($conn,"select Userid from registrationdb where Username='".$Username."' and Password='".$Password."'");
echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Userid"; echo"</th>";
			
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Userid"]; echo"</td>";
			echo"</tr>";
		}
		echo "</table>";
	
	?>
	

<body>
	<form action="registeronly.php" method="POST"></form>
<a href="../pages/contactus.html"><input type="submit" name="Noted" value="Noted"></a>


	<?php
$conn = new mysqli("localhost","root","","toursandtravels");
	if (isset($_POST["Noted"])) {
	header("location ../pages/contactus.html");
	}

?>
</body>
</html>



