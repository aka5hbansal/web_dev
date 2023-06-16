<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "empdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection OK";
}
else
{
    echo "Connection failed";
}
?>