<?php
$db = "ecom";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";
$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//   else
//   echo "success";

?>