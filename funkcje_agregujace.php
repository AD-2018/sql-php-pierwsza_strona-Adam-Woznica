<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
    
    <h1>Adam Woźnica</h1>
    <nav>
        <ul>
            <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Adam-Woznica">EXIT</a>
            <a href="index.php">Strona Główna</a>
            <a href="pracownicy_organizacja.php">Pracow. i Org.</a>
            <a href="funkcje_agregujace.php">Funkcje Agregujace</a>
            <a href="data_czas.php">Data i Czas</a>
            <a href="formularz.html">Formularze</a>
            <a href="danedobazy.html">+ i -</a> 
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

$sql ="select sum(zarobki) from pracownicy"; 
echo("<h3>Zadanie 1</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql ="select sum(zarobki) from pracownicy where imie like '%a'"; 
echo("<h3>Zadanie 2</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
echo("<h3>Zadanie 3</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a'"; 
echo("<h3>Zadanie 4</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where (dzial=4)"; 
echo("<h3>Zadanie 4</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo("<h3>Zadanie 5</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy"; 
echo("<h3>Zadanie 6</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
$sql ="select count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
echo("<h3>Zadanie 7</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
       echo("<h2>Group By</h2>"); 
    
$sql ="select nazwa_dzial, sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Zadanie 8</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, count(imie) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Zadanie 9</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>count(imie)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['count(imie)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Zadanie 10</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select sum(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
echo("<h3>Zadanie 11</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>sum(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['sum(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select avg(zarobki), if((imie like '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec"; 
echo("<h3>Zadanie 12</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th><th>plec</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td><td>".$row['plec']."</td>");    
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
           echo("<h2>Having</h2>"); 
            
    $sql ="select nazwa_dzial,sum(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having sum(zarobki)<28"; 
echo("<h3>Zadanie 13</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>sum(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['sum(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
                    
    $sql ="select nazwa_dzial,avg(zarobki) from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having avg(zarobki)>30"; 
echo("<h3>Zadanie 14</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>avg(zarobki)</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['avg(zarobki)']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
     
    $sql ="select count(imie),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by nazwa_dzial having count(imie)>3"; 
echo("<h3>Zadanie 15</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>count(imie)</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 




?>

<h2>A guziki są piękne      >:|</h2>

</body>
</html>
