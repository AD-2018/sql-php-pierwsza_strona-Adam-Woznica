<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
    
    <h1>Adam Woźnica</h1>
    <nav>
        <ul>
            <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Adam-Woznica">EXIT</a></li>
            <li><a href="index.php">Strona Główna</a></li>   
            <li><a href="pracownicy_organizacja.php">Pracow. i Org.</a></li>
            <li><a href="funkcje_agregujace.php">Funkcje Agregujace</a></li>
            <li><a href="data_czas.php">Data i Czas</a></li>  
          </ul>
    </nav>
    
<?php
$servername = "mysql-michael-musiol.alwaysdata.net";
$username = "218443_adam";
$password = "Q@wertyuiop";
$dbname = "michael-musiol_pracownicy_organizacja";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql ="select * from pracownicy,organizacja where id_org=dzial";
echo("<h3>wrr</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th><th>id_org</th><th>nazwa_dzial</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['id_org']."</td><td>".$row['nazwa_dzial']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');



?>

<h2>A guziki są piękne      >:|</h2>

</body>
</html>