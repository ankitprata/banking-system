<?php
$host="localhost";
$usename="root";
$pass="";
$db="bank";

$con=mysqli_connect($host,$usename,$pass,$db);
if(!$con)
{
   echo "failed";
}


?>
