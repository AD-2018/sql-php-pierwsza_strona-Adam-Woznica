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
echo("<h3>Witam na agregatach</h3>");
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

$sql ="select SUM(zarobki) from pracownicy";
echo("<h3>Zadanie 1</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th> suma zarobków</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['SUM(zarobki)']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');

$sql ="select imie,SUM(zarobki) from pracownicy where imie not like '%a'";
echo("<h3>Zadanie 2</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>Suma zarobków kobiet</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['SUM(zarobki)']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');

$sql ="select SUM(zarobki) from pracownicy where imie not like '%a' and (dzial=3 or dzial=2)";
echo("<h3>Zadanie 3</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>suma zarobków facetów z działu 2 i 3</th>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['SUM(zarobki)']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');

$sql ="select AVG(zarobki) from pracownicy where imie not like '%a'";
echo("<h3>Zadanie 4</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>średnia zarobków facetów</th>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['AVG(zarobki)']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');

$sql ="select AVG(zarobki) from pracownicy where dzial=4";
echo("<h3>Zadanie 5</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>średnia zarobków dzialu 4</th>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['AVG(zarobki)']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');









?>

<h2>A guziki są piękne      >:|</h2>

</body>
</html>
