<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../stylle.css">
</head>
<body>
    
    <h1>Adam Woźnica !</h1>
    <nav>
        <ul>
        <?php 
           include_once("../menu.php");
           ?>
          </ul>
    </nav>
    
<?php

require_once("../connect.php");

$sql ="select * from pracownicy,organizacja where id_org=dzial";
echo("<h3>Za dużo tych zadań</h3>");
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

$sql ="select imie,year(curdate())-year(data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial and nazwa_dzial='serwis'"; 
echo("<h3>Zadanie 1</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy"; 
echo("<h3>Zadanie 2 </h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy,organizacja where id_org=dzial and nazwa_dzial='handel'"; 
echo("<h3>Zadanie 3</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
       $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy where imie like '%a'"; 
echo("<h3>Zadanie 4</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
        
        $sql ="select sum(year(curdate())-year(data_urodzenia)) as suma_lat from pracownicy where imie not like '%a'"; 
echo("<h3>Zadanie 5</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>suma_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['suma_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
        $sql ="select nazwa_dzial,avg(year(curdate())-year(data_urodzenia)) as srednia_lat from pracownicy,organizacja where id_org=dzial group by nazwa_dzial"; 
echo("<h3>Zadanie 6</h3>");
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th><th>srednia_lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['srednia_lat']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    

?>

<h2>Dobra styknie tego</h2>

</body>
</html>
