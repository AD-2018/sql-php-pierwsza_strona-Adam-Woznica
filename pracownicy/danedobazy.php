<html>
<head>
	<link rel="stylesheet" href="stylee.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>+ i -</title>
</head>
<body>
<h1>Adam Woźnica</h1>
    <nav>
        <ul>
        <?php 
           include_once("../menu.php");
           ?>
        </ul>
    </nav>
<h3>Dodawanie Ludzi</h3>
<form action="insert.php" method="POST">

				
			<label>Imie:</label><input type="text" name="imie"><br>
	
			<label>Dzial:</label><input type="text" name="dzial"></br>
				
			<label>Zarobki:</label><input type="text" name="zarobki"></br>
	
			<label>Data urodzenia:</label><input type="date" name="data_urodzenia"></br>
				
			<input type="submit" value="dodaj">
</form>
<h3>wywalanie ludzi</h3>
<form action="delete.php" method="POST">
	<label>Podaj id:</label><input type="number" name="id_pracownicy"
				 padding: 1rem; */></br>
   <input type="submit" value="wywal">
</form>
<?php

require_once("../connect.php");

$sql ="select * from pracownicy"; 
echo("<h3>Lista pracowników</h3>"); 
echo("<h4>$sql</h4>");
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th><th>Usuń Pracownika</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){    
  echo("<tr>");     
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>'.
'<td>
<form action="delete.php" method="POST">
<input name="id_pracownicy" value="'.$row['id_pracownicy'].'" hidden>
<input type="submit" value="wywal">
</form>
</td>');
  echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
