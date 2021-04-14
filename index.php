<?php
include_once("https://blog-lokal.000webhostapp.com/connect.php");

$conn = sql_connect("localhost", "id15353728_root2", "@Qazxcvbn123", "id15353728_login");
if (!mysqli_connect_errno()) {
  echo("Success");
} else {
  echo("Gagagl");
}
?>