

<!DOCTYPE html>

<html lang="">

<head>
<title>Travelers Point </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<?php
$Userid = $_POST['Userid'];
$conn = new mysqli("localhost","root","","toursandtravels");
if(isset($_POST["View"]))
{
$res=mysqli_query($conn,"select * from registrationdb where Userid='$_POST[Userid]'");
		echo "<table border=1>";
		echo "<tr>";
			echo"<th>"; echo "Username"; echo"</th>";
			echo"<th>"; echo "Contact"; echo"</th>";
			echo"<th>"; echo "Email"; echo"</th>";
			echo"<th>"; echo "Address"; echo"</th>";
			echo"<th>"; echo "City"; echo"</th>";
			echo"<th>"; echo "Password"; echo"</th>";
		echo "</tr>";
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

		$res=mysqli_query($conn,"select * from locationdb where Userid='$_POST[Userid]'");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Lname"; echo"</th>";
			echo"<th>"; echo "Lcity"; echo"</th>";
			echo"<th>"; echo "RecieveFrom"; echo"</th>";
			echo"<th>"; echo "RecieveBy"; echo"</th>";
			
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Lname"]; echo"</td>";
			echo"<td>"; echo $row["Lcity"]; echo"</td>";
			echo"<td>"; echo $row["RecieveFrom"]; echo"</td>";
			echo"<td>"; echo $row["RecieveBy"]; echo"</td>";
			
			echo"</tr>";
		}
		echo "</table>";

		$res=mysqli_query($conn,"select * from hoteldb where Userid='$_POST[Userid]'");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "Hcontact"; echo"</th>";
			echo"<th>"; echo "Hname"; echo"</th>";
			echo"<th>"; echo "Checkin"; echo"</th>";
			echo"<th>"; echo "Checkout"; echo"</th>";
			echo"<th>"; echo "Adults"; echo"</th>";
			echo"<th>"; echo "Room"; echo"</th>";
			echo"<th>"; echo "Children"; echo"</th>";
			echo"<th>"; echo "SRoom"; echo"</th>";
			echo"<th>"; echo "DRoom"; echo"</th>";
			
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["Hcontact"]; echo"</td>";
			echo"<td>"; echo $row["Hname"]; echo"</td>";
			echo"<td>"; echo $row["Checkin"]; echo"</td>";
			echo"<td>"; echo $row["Checkout"]; echo"</td>";
			echo"<td>"; echo $row["Adults"]; echo"</td>";
			echo"<td>"; echo $row["Room"]; echo"</td>";
			echo"<td>"; echo $row["Children"]; echo"</td>";
			echo"<td>"; echo $row["SRoom"]; echo"</td>";
			echo"<td>"; echo $row["DRoom"]; echo"</td>";
			echo"</tr>";
		}
		echo "</table>";
}
?>

</body>
<a href="../forms/update.html"><input type="submit" name="View" value="View"></a>


	<?php
$conn = new mysqli("localhost","root","","toursandtravels");
	if (isset($_POST["View"])) {
	header("location update.html");
	}

?>	
</body>
</html>	




