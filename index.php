<?php
$host = "https://databases.000webhost.com/";
$uname = "id15353728_root2";
$pass = "@Qazxcvbn123";
$dbname = "id15353728_login";

$conn = mysqli_connect($host, $uname, $pass, $dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>