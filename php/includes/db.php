<?php
$server ='localhost';
$user = 'harshitshroti';
$password ='harshit';
$db ='php_course';

$conn=mysqli_connect($server,$user,$password,$db);

if(!$conn){
	die("connection fell !:".mysqli_connect_error());
	
}

?>