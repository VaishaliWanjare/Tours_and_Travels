<?php
  
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $conn = new mysqli("localhost","root","","toursandtravels");

    

    	$sql = "select Username , Password from registrationdb where Username='".$Username."' and Password = '".$Password."' ";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        if($row['Username'] == $Username && $row['Password'] == $Password)
        {
            echo"You are a Valid User!\n";
            header('location: update.html');
        }
        else

        if($Username = 'Admin' && $Password = 'Virat')
        {
            
            header('location: administrator.html');
        }
        else 
        {
            echo"\nSorry, Your Credentials are not valid, Please Try Again.\n";
        }
           

    	
    	
?>