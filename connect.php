<?php
$servername = "mysql-bazardanychxd.alwaysdata.net";
$username = "232429";
$password = "Haslo123";
$dbname = "bazardanychxd_5";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>