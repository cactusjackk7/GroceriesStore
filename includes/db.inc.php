<?php 

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "'t Fruithuisje";

$conn = mysqli_connect($servername, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
   die("Connection failed: :" . mysqli_connect_error());
}


