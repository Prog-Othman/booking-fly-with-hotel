<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = 'ofbms_db';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
// visit codeastro.com for more projects
