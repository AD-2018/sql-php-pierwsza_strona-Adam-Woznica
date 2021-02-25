<?php
echo("Delete<br>");
echo $_POST['id'];


require_once("../connect.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM pracownicy WHERE id"=.$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
