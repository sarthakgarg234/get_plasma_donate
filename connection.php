<?php
session_start();
define("base_root", "http://localhost/get_plasma_donate/");
$con=mysqli_connect("localhost", "root", "", "");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>