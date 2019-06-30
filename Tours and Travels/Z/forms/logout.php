<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location: z1.html");
ob_end_flush(); 
include 'z1.html';
//include 'home.php';
exit();
?>