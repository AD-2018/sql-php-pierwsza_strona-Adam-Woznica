<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11405635";
$password = "hgVDwHQpEe";
$dbname = "sql11405635";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>