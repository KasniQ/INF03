<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styl.css">
  <title>Pokoje</title>
</head>
<body>
  <div id="baner1">
    <h2>WYNAJEM POKOI</h2>
  </div>
  <div id="menu1">
    <a href="index.html">POKOJE</a>
  </div>
  <div id="menu2">
    <a href="cennik.php">CENNIK</a>
  </div>
  <div id="menu3">
    <a href="kalkulator.html">KALKULATOR</a>
  </div>
  <div id="baner2">

  </div>
  <div id="lewy">
  </div>
  <div id="srodkowy">
  <table>
    <?php
    $url='localhost';
    $id='root';
    $passwd='';
    $bd='wynajem';
    $polaczenie=mysqli_connect($url,$id,$passwd,$bd);
    $zapytanie="select * from pokoje;";
    $wynik=mysqli_query($polaczenie,$zapytanie);
    foreach($wynik as $wiersz){
      echo '<tr>';
      echo '<td>';
      echo $wiersz['id'];
      echo '</td>';
      echo '<td>';
      echo $wiersz['nazwa'];
      echo '</td>';
      echo '<td>';
      echo $wiersz['cena'];
      echo '</td>';
      echo '</tr>';
    }

    mysqli_close($polaczenie);
  ?>
  </table>
  
  </div>
  <div id="prawy">
  </div>
  <div id="stopka">
    <p>Stronę opracował:24598412980</p>
  </div>
</body>
</html>