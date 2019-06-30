<?php
$conn = new mysqli("localhost","root","","toursandtravels");



		if (isset($_POST["submit2"])) {
		mysqli_query($conn,"delete from registrationdb where Username='$_POST[Username]' and Password='$_POST[Password]'");
	}
	
		if (isset($_POST["submit3"])) {
		mysqli_query($conn,"update registrationdb set Username='$_POST[Username]' OR Contact='$_POST[Contact]'OR Email='$_POST[Email]' OR Address='$_POST[Address]' OR City='$_POST[City]' OR Password='$_POST[Password]' where Username='$_POST[Username]' and Password='$_POST[Password]'");

		

		
	}
		if (isset($_POST["submit5"])) {

$res=mysqli_query($conn,"select * from registrationdb where Username='$_POST[Username]' and Username='$_POST[Username]'");
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

}
if (isset($_POST["submit71"]))
{
	mysqli_query($conn,"delete from locationdb where LContact='$_POST[LContact]'");

}

if (isset($_POST["submit72"]))
{
	mysqli_query($conn,"update locationdb set Lname='$_POST[Lname]' OR Lcity='$_POST[Lcity]' OR RecieveFrom='$_POST[RecieveFrom]' OR RecieveBy='$_POST[RecieveBy]' where LContact='$_POST[LContact]'");

}

if (isset($_POST["submit73"]))
{

	$res=mysqli_query($conn,"select * from locationdb where LContact='$_POST[LContact]'");
		echo "<table border=1>";
		echo"<tr>";
		echo"<th>"; echo "LContact"; echo"</th>";
			echo"<th>"; echo "Lname"; echo"</th>";
			echo"<th>"; echo "Lcity"; echo"</th>";
			echo"<th>"; echo "RecieveFrom"; echo"</th>";
			echo"<th>"; echo "RecieveBy"; echo"</th>";
			
		echo"</tr>";
		while ($row=mysqli_fetch_array($res)) {
			echo"<tr>";
			echo"<td>"; echo $row["LContact"]; echo"</td>";
			echo"<td>"; echo $row["Lname"]; echo"</td>";
			echo"<td>"; echo $row["Lcity"]; echo"</td>";
			echo"<td>"; echo $row["RecieveFrom"]; echo"</td>";
			echo"<td>"; echo $row["RecieveBy"]; echo"</td>";
			
			echo"</tr>";
		}
		echo "</table>";
}

if (isset($_POST["submit61"]))
{
mysqli_query($conn,"delete from hoteldb where HContact='$_POST[HContact]'");
}

if (isset($_POST["submit62"]))
{
mysqli_query($conn,"update hoteldb set Hname='$_POST[Hname]' OR Checkin='$_POST[Checkin]' OR Checkout='$_POST[Checkout]' OR Adults='$_POST[Adults]' OR Room='$_POST[Room]' OR Children='$_POST[Children]' OR SRoom='$_POST[SRoom]' OR DRoom='$_POST[DRoom]' OR Requirement='$_POST[Requirement]' where HContact='$_POST[HContact]'");

}

if (isset($_POST["submit63"]))
{
		$res=mysqli_query($conn,"select * from hoteldb where HContact='$_POST[HContact]'");
		echo "<table border=1>";
		echo"<tr>";
			echo"<th>"; echo "HContact"; echo"</th>";
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
			echo"<td>"; echo $row["HContact"]; echo"</td>";
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


