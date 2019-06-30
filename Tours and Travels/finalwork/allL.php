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
	<form name="Form2" action="" method="POST">
		<table>
			<tr>
				<td>Location Name</td>
				<td><input type="text" name="Lname" placeholder="Travelling location"></td>
			</tr>
		
			<tr>
				<td>City</td>
				<td><input type="text" name="Lcity" placeholder="Travelling City"></td>
			</tr>
			
			
				
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
		mysqli_query($conn,"insert into locationdb values('$_POST[Lname]','$_POST[Lcity]')");
	}

		if (isset($_POST["submit2"])) {
		mysqli_query($conn,"delete from locationdb where Username='$_POST[Username]'");
	}
	
		if (isset($_POST["submit3"])) {
		mysqli_query($conn,"update locationdb set Lname='$_POST[Lname]' OR Lcity='$_POST[Lcity]' where Lname='$_POST[Lname]'");
	}

		if (isset($_POST["submit5"])) {
		$res=mysqli_query($conn,"select * from locationdb where Lname='$_POST[Lname]'");
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
		if(isset($_POST["submit4"]))
        {
            echo"You are a Valid User!\n";
            header('location: allH.php');
        } 



	?>


</body>
</html>