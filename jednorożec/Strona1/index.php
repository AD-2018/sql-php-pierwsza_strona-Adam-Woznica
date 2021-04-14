<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        <title>Adam Woźnica</title>
</head>
    <body>
     <h1>Adam Woźnica</h1>
         
  
        <div class="nav">
      <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Adam-Woznica">Exit</a>

      <div class="container">
          <header>
              <?php
              require_once("../../connect.php");

              $sql ="select * from produkty";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id_produkt</th><th>produkt</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id_produkt'].'</td>'.'<td>'.$wiersz['produkt'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");

        
              ?>
              </header>

          <nav>
              Jednorożc Tak
              <?php
              require_once("../../connect.php");

              $sql ="select * from producenci";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id_prod</th><th>producent</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id_prod'].'</td>'.'<td>'.$wiersz['producent'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");

        
              ?>
          </nav>

          <main>
              Jednorożc Nie
              <?php
              require_once("../../connect.php");

              $sql = "SELECT id, producent, produkt FROM Sklep, producenci, produkty WHERE produkty.id_produkt = Sklep.id_produkt AND producenci.id_producent = Sklep.id_producent";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id</th><th>producent</th><th>produkt</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id'].'</td>'.'<td>'.$wiersz['producent'].'</td>'.'<td>'.$wiersz['produkt'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");

        
              ?>
          </main>

          <aside>
              Jednorożc Fajnie
          </aside>

          <footer>
              Jednorożc XD
          </footer>
          
        </div>
    </body>
</html>
