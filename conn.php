<?php
$db_name= "fanfare";
$mysql_username= "root";
$mysql_pswd ="fanfare";
$server_name="localhost";
$conn= mysqli_connect($server_name,$mysql_username,$mysql_pswd,$db_name);
if($conn)
{
echo "Connection success <br> <br>";
}
else {
echo "connection not success <br> <br>";
}
?>