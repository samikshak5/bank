<?php
   


   $server = "localhost";
    $username = "root";
    $password = "";
    $db = "sparks_bank"; 
	
$conn = new mysqli ($server, $username, $password, $db);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());

	
	}

?>