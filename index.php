<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<h1>Adam Woźnica</h1>
https://github.com/AD-2018/sql-php-pierwsza_strona-Adam-Woznica
</head>
<body>
<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7373516";
$password = "ShsEsc4Kim";
$dbname = "sql7373516";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql ="select * from pracownicy";
echo("<h3>Jest Pan Zadowolony?</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
    echo("<tr>");
echo("</tr>");
}
echo('</table>');
?>


</body>
</html>
