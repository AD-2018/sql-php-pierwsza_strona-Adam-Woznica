<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../stylle.css">
</head>
<body>
    
    <h1>Adam Woźnica</h1>
    <nav>
        <ul>
           <?php 
           include_once("../menu.php");
           ?>
    </nav>
    
<?php
require_once("connect.php");



$sql ="select * from pracownicy";
echo("<h3>Może Pan mówić co chce, ja jestem dumny z tych guzików</h3>");
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

$sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)<35"; 
echo("<h3>zadanie1</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
      $sql ="select avg(zarobki),nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial having avg(zarobki)<40"; 
      echo("<h3>zadanie2</h3>"); 
      echo("<h4>$sql</h4>");
      $result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>avg(zarobki)</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
        $sql ="select imie,zarobki from pracownicy where imie not like '%a' having zarobki<40"; 
echo("<h3>zadanie3</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
          $sql ="select nazwa_dzial from pracownicy,organizacja where id_org=dzial and (dzial=2 or dzial=3) group by dzial"; 
echo("<h3>zadanie4</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 

?>


</body>
</html>
