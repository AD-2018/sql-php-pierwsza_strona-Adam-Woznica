<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <?php
        echo"<h1>Witam</h1>";
        
              require_once("../../connect.php");

              $sql ="select * from fryzjer";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id_fryzjer</th><th>fryzjer</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id_fryzjer'].'</td>'.'<td>'.$wiersz['fryzjer'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");

        
              ?>
        
      </header>
      <nav>
        2
        <?php
              require_once("../../connect.php");

              $sql ="select * from klient";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id_klient</th><th>klient</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id_klient'].'</td>'.'<td>'.$wiersz['klient'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");

        
              ?>
      </nav>

      <main>
        3
        <?php
              require_once("../../connect.php");

              $sql = "SELECT id, fryzjer, klient FROM spa, fryzjer, klient WHERE fryzjer.id_fryzjer = spa.id_fryzjer AND klient.id_klient = spa.id_klient";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id</th><th>fryzjer</th><th>klient</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id'].'</td>'.'<td>'.$wiersz['fryzjer'].'</td>'.'<td>'.$wiersz['klient'].'</td>');
                      echo('</tr>');
                  }
              
                  echo('</table>');
                  
              echo("<br>");
                  ?>
      </main>
      <aside>
        5
 </aside>
      <footer>
        4 gotowe
      </footer>
    </div>
  </body>
</html>