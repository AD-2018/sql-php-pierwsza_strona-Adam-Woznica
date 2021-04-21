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
        echo"<h1>RIP Krzysztof Krawczyk [*]</h1>";
        require_once("../../connect.php");

        $sql ="select * from prawnik";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Tabele");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>id_prawnik</th><th>prawnik</th><th>X</th>');
        
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_prawnik'].'</td>'.'<td>'.$wiersz['prawnik'].'<td>

                <form action="prawnik.php" method="POST">
                 <input name="id" value="'.$wiersz['id_prawnik'].'" hidden>
                  <input type="submit" class="button_x" value="X">
                </form>

                </td>');
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

        $sql ="select * from sprawa";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Tabele");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>id_sprawa</th><th>sprawa</th><th>X</th>');
        
            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_sprawa'].'</td>'.'<td>'.$wiersz['sprawa'].'<td>

                <form action="sprawa.php" method="POST">
                 <input name="id" value="'.$wiersz['id_sprawa'].'" hidden>
                  <input type="submit" class="button_x" value="X">
                </form>

                </td>');
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

              $sql = "SELECT id, prawnik, sprawa FROM kancelaria, prawnik, sprawa WHERE prawnik.id_prawnik = kancelaria.id_prawnik AND sprawa.id_sprawa = kancelaria.id_sprawa";
              $wynik = mysqli_query($conn, $sql);
                  
                  echo("<br>");
                  echo("Tabele");
                  echo("<br>");
                  echo($sql);
                  echo('<table border="1">');
                  echo('<th>id</th><th>prawnik</th><th>sprawa</th><th>X</th>');
              
                  while($wiersz=mysqli_fetch_assoc($wynik))
                  {
                      echo('<tr>');
                      echo('<td>'.$wiersz['id'].'</td>'.'<td>'.$wiersz['prawnik'].'</td>'.'<td>'.$wiersz['sprawa'].'<td>

                      <form action="kancelaria.php" method="POST">
                       <input name="id" value="'.$wiersz['id'].'" hidden>
                        <input type="submit" class="button_x" value="X">
                      </form>
      
                      </td>');
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
    </div>
  </body>
</html>