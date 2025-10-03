<?php
$ip="localhost";
$u="root";
$p="";
$db="hospital";
$con=mysqli_connect($ip,$u,$p,$db);
if(mysqli_connect_errno()){
echo('conexion fallida');  
exit();
}
?>