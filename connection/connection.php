<?php

$host 		= "localhost";
$username 	= "root";
$password 	= "";
$db 		= "db_indie"

$connection = mysqli_connect($host, $username, $password) or die(mysqli_error());

$db_con		= mysqli_select_db($connection, $db);

?>