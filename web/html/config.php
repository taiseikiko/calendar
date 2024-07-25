<?php

$host = "mysql"; /* Host name */
$user = "root"; /* User */
$password = "taisei2041"; /* Password */
$dbname = "test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}