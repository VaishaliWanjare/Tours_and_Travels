<?php
$conn = new mysqli("localhost","root","","toursandtravels");
?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>
<body>
	<form name="Form1" action="" method="POST">

		
			<td align="center"><input type="submit" name="submit4" value="Viewall">Registration</td>
			<td align="center"><input type="submit" name="submit8" value="Viewall">Location</td>
			<td align="center"><input type="submit" name="submit12" value="Viewall">Hotel</td>
<?php

	if (isset($_POST["submit4"])) {
		$res=mysqli_query($conn,"select * from registrationdb");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Username"; echo"</th>";
			echo"<th>"; echo "Contact"; echo"</th>";
			echo"<th>"; echo "Email"; echo"</th>";
			echo"<th>"; echo "Address"; echo"</th>";
			echo"<th>"; echo "City"; echo"</th>";
			echo"<th>"; echo "Password"; echo"</th>";
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Username"]; echo"</td>";
			echo"<td>"; echo $row["Contact"]; echo"</td>";
			echo"<td>"; echo $row["Email"]; echo"</td>";
			echo"<td>"; echo $row["Address"]; echo"</td>";
			echo"<td>"; echo $row["City"]; echo"</td>";
			echo"<td>"; echo $row["Password"]; echo"</td>";
			echo"</tr>";
		}
		echo "</table>";
	}
	if (isset($_POST["submit8"])) {
		$res=mysqli_query($conn,"select * from locationdb ");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Lname"; echo"</th>";
			echo"<th>"; echo "Lcity"; echo"</th>";
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Lname"]; echo"</td>";
			echo"<td>"; echo $row["Lcity"]; echo"</td>";
			echo"</tr>";
		}
		echo "</table>";

	}	
	if (isset($_POST["submit12"])) {
		$res=mysqli_query($conn,"select * from hoteldb ");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Hname"; echo"</th>";
			echo"<th>"; echo "Night"; echo"</th>";
			echo"<th>"; echo "SRoom"; echo"</th>";
			echo"<th>"; echo "DRoom"; echo"</th>";
			echo"<th>"; echo "Rating"; echo"</th>";
			echo"<th>"; echo "Requirement"; echo"</th>";
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Hname"]; echo"</td>";
			echo"<td>"; echo $row["Night"]; echo"</td>";
			echo"<td>"; echo $row["SRoom"]; echo"</td>";
			echo"<td>"; echo $row["DRoom"]; echo"</td>";
			echo"<td>"; echo $row["Rating"]; echo"</td>";
			echo"<td>"; echo $row["Requirement"]; echo"</td>";
			echo"</tr>";
		}
		echo "</table>";

	}	


}
	?>

