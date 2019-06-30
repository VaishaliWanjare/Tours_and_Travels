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
	<form name="Form3" action="" method="POST">
		<table>
			<tr>
				<td>Hotel Name</td>
				<td><input type="text" name="Hname"></td>
			</tr>
		
			<tr>
				<td>No of Nights</td>
				<td><input type="text" name="Night" placeholder="Enter no of Nights"></td>
			</tr>
			
			<tr>
				<td>Single Room</td>
				<td><input type="text" name="SRoom" placeholder="Numeric"></td>
			</tr>
			<tr>
				<td>Double Room</td>
				<td><input type="text" name="DRoom" placeholder="Numeric"></td>
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="text" name="Rating" placeholder="*****"></td>
			</tr>
			<tr>
				<label for="inputComment">Requirement:<sup>*</sup>
                     </label>
                     <textarea name="Requirement" id="Requirement" rows="5" cols="30">
                    </textarea>
			</tr>
			<tr>
				
				<td align="center"><input type="submit" name="submit1" value="Insert"></td>
				<td align="center"><input type="submit" name="submit2" value="Delete"></td>
				<td align="center"><input type="submit" name="submit3" value="Update"></td>
				<td align="center"><input type="submit" name="submit4" value="View"></td>
				<td align="center"><input type="submit" name="submit5" value="View"></td>

			</tr>
		</table>
	</form>

	<?php

	if (isset($_POST["submit1"])) {
		mysqli_query($conn,"insert into hoteldb values('$_POST[Hname]','$_POST[Night]','$_POST[SRoom]','$_POST[DRoom]','$_POST[Rating]','$_POST[Requirement]')");
	}

		if (isset($_POST["submit2"])) {
		mysqli_query($conn,"delete from hoteldb where Hname='$_POST[Hname]'");
	}
	
		if (isset($_POST["submit3"])) {
		mysqli_query($conn,"update hoteldb set Hname='$_POST[Hname]' OR Night='$_POST[Night]'OR SRoom='$_POST[SRoom]' OR DRoom='$_POST[DRoom]' OR Rating='$_POST[Rating]' OR Requirement='$_POST[Requirement]' where Hname='$_POST[Hname]'");
	}

		if (isset($_POST["submit5"])) {
		$res=mysqli_query($conn,"select * from hoteldb where Hname='$_POST[Hname]'");
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
		if(isset($_POST["submit4"]))
        {
            echo"You are a Valid User!\n";
            header('location: pages/register.html');
        } 	


	?>


</body>
</html>