<?php
$conn = new mysqli("localhost", "root", "","toursandtravels");
include("registerphp.php");
$id=$_REQUEST['id'];
$query = "SELECT * from registrationdb where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

| <a href="registerphp.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>


<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['Username'];
$age =$_REQUEST['Contact'];
$name =$_REQUEST['Email'];
$age =$_REQUEST['Address'];
$age =$_REQUEST['City'];
$name =$_REQUEST['Password'];

$submittedby = $_SESSION["Username"];
$update="update new_record set trn_date='".$trn_date."',
Username='".$Username."', 
Username='".$Contact."',
Username='".$Email."',
Username='".$Address."',
Username='".$City."',
Username='".$Password."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully." </br></br>
<a href='view.php'>View Updated Record</a>;
echo <p style="color:#FF0000;">'.$status.'</p>;
}
?>

<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="Username" placeholder="Enter Name" 
required value="<?php echo $row['Username'];?>" /></p>
<p><input type="text" name="Contact" placeholder="Mobile" 
required value="<?php echo $row['Contact'];?>" /></p>
<p><input type="text" name="Email" placeholder="Email" 
required value="<?php echo $row['Email'];?>" /></p>
<p><input type="text" name="Address" placeholder="Address" 
required value="<?php echo $row['Address'];?>" /></p>
<p><input type="text" name="City" placeholder="City" 
required value="<?php echo $row['City'];?>" /></p>
<p><input type="text" name="Password" placeholder="Enter Password" 
required value="<?php echo $row['Password'];?>" /></p>


</form>
<?php } ?>
</div>
</div>
</body>
</html>