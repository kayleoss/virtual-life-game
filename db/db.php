<?php 
$user = 'root';
$password = 'root';
$db = 'irl-game';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$conn = mysqli_connect(
   $host,
   $user,
   $password,
   $db,
   $port
);

?>