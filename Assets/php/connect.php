<?php 

$server = "localhost";
$user = "root";
$password = "bonoko1289";


if( mysqli_connect($server,$user,$password) ) {
	echo "Successfully connected";
	}
else {
	die("Error occured");
}
 ?>