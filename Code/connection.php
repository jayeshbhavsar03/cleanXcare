<?php 
$host="localhost";
$database="cleanxcare";
$user="root";
$pass="";
$connection=mysqli_connect($host, $user, $pass, $database);
if(!$connection) {
	die("Connection failed: ".mysqli_connect_error());
}
 ?>