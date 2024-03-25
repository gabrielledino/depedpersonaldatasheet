<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "deped-personal-data-sheet";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>