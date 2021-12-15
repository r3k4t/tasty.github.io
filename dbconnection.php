<?php 

$hostname = 'localhost';
$username ='root';
$password = '';
$dbname = 'user';


$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn -> connect_error){
  die("connection failed.".$conn->conncet_error);
}

// 





?>
