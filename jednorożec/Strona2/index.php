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
        echo"<h1>Jednorożec tańczy, tańczy, tańczy, tańczy</h1>";
        require_once("../../connect.php");

        $sql ="select * from pracownik";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Tabele");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>id_chlop</th><th>pracownik</th>');
        
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_chlop'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>');
                echo('</tr>');
            }
        
            echo('</table>');
            
        echo("<br>");
        ?>
      </header>
      <nav>
        2
        <?php
        echo"<h1>Jednorożec tańczy, tańczy, tańczy, tańczy</h1>";
        require_once("../../connect.php");

        $sql ="select * from projekt";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Tabele");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>id_pro</th><th>projekt</th>');
        
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_pro'].'</td>'.'<td>'.$wiersz['projekt'].'</td>');
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

              $sql = "SELECT id, pracownik, projekt FROM firma, pracownik, projekt WHERE projekt.id_pro = firma.id_pro AND pracownik.id_chlop = firma.id_chlop";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id</th><th>pracownik</th><th>projekt</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>'.'<td>'.$wiersz['projekt'].'</td>');
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
        4
      </footer>
      <div class="pole">
         5
      </div>
    </div>
  </body>
</html>