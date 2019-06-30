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
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username" placeholder="Enter name"></td>
			</tr>
		
			<tr>
				<td>Contact</td>
				<td><input type="text" name="Contact" placeholder="Mobile"></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" placeholder="Enter Emailid"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="Address" placeholder="delivery Address"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="City" placeholder="Your City"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="Password" placeholder="keep a strong Password"></td>
			</tr>
			<tr>
				
				<td align="center"><input type="submit" name="submit1" value="Insert"></td>
				<td align="center"><input type="submit" name="submit2" value="Delete"></td>
				<td align="center"><input type="submit" name="submit3" value="Update"></td>
				<td align="center"><input type="submit" name="submit4" value="Next"></td>
				<td align="center"><input type="submit" name="submit5" value="View"></td>

			</tr>
		</table>
	</form>

	<?php

	if (isset($_POST["submit1"])) {
		mysqli_query($conn,"insert into registrationdb values('$_POST[Username]','$_POST[Contact]','$_POST[Email]','$_POST[Address]','$_POST[City]','$_POST[Password]')");
	}

		if (isset($_POST["submit2"])) {
		mysqli_query($conn,"delete from registrationdb where Username='$_POST[Username]'");
	}
	
		if (isset($_POST["submit3"])) {
		mysqli_query($conn,"update registrationdb set Username='$_POST[Username]' OR Contact='$_POST[Contact]'OR Email='$_POST[Email]' OR Address='$_POST[Address]' OR City='$_POST[City]' OR Password='$_POST[Password]' where Password='$_POST[Password]'");
	}
			if (isset($_POST["submit5"])) {
		$res=mysqli_query($conn,"select * from registrationdb where Username='$_POST[Username]'");
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
	if(isset($_POST["submit4"]))
        {
            echo"You are a Valid User!\n";
            header('location: allL.php');
        } 




	?>


</body>
</html>