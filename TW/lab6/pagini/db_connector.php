<?php
$db_host = "localhost";
$db_pass = "";
$db_user = "root";
$db_name = "lab6";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
  die('Failed to connect to mysql');
}
?>