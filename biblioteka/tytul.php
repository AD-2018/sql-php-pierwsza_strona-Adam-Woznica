<?php
echo("witam w tytul.php <br>");
echo $_POST['tytul'];

require_once("../connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_tytul(id_tytul, tytul) VALUES(null, '".$_POST['tytul']."')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "dodano";
  header('Location: https://woznicaadam.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>