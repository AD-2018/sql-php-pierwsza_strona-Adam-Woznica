<?php
echo("działa?");

$servername = "mysql-michael-musiol.alwaysdata.net";
$username = "218443_adam";
$password = "Q@wertyuiop";
$dbname = "michael-musiol_pracownicy_organizacja";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,".'"'.$_POST['imie'].'"'.','.$_POST['dzial'].','.$_POST['zarobki'].','.'"'.$_POST['data_urodzenia'].'"'.')';
echo "<li>".$sql;


if ($conn->query($sql) === TRUE) {
  header('Location: https://olga-szulc.herokuapp.com/danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>