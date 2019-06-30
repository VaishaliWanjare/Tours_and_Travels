

<?php
$conn = new mysqli("localhost", "root", "","toursandtravels");

$id=$_REQUEST['id'];
$query = "DELETE FROM registrationdb WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>