<?php
echo $_POST['id'];

require_once("../../connect.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM produkty WHERE id_produkt=".$_POST['id'];


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://woznicaadam.herokuapp.com/jednoro%C5%BCec/Strona1/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>