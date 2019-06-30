<?php
    //get values passed from form in login.php
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    // to prevent mysql injection
    $Username = stripcslashes($Username);
    $Password = stripcslashes($Password);
    

    // connect to the server and select database
    $conn=mysql_connect("localhost", "root", "", "toursandtravels");

    // Query the database for user
    $result = mysql_query("select * from user where Username = '".$Username."' and Password = '".$Password."'") 
                  or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['Username'] == $Username && $row['Password'] == $Password )
    {
    	echo "Login Success!!!  Welcome ".$row['Username'];
    }
    else
    {
    	echo "Failed to Login!!";
    }
?>
