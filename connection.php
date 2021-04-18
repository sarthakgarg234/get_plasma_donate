<?php
define("base_root", "http://localhost/get_plasma_donate/");
$con=mysqli_connect("localhost", "root", "", "get_plasma_donate");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>