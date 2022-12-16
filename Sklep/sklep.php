<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl2.css">
    <title>Warzywniak</title>
</head>
<body>
    <div id="baner1">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div id="baner2">
        <ol>
            <li>warzywa,</li>
            <li>owoce,</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
        </ol>
    </div>
    <div id="glowny">
    <?php
    $serwer="localhost";
    $user="root";
    $haslo="";
    $db="dane2";
    $polaczenie=mysqli_connect($serwer,$user,$haslo,$db) or die("askgj");
    $zapytanie1="select nazwa,ilosc, opis, cena, zdjecie from produkty where rodzaje_id in (1,2)";
    $wynik=mysqli_query($polaczenie,$zapytanie1);
    foreach($wynik as $wiersz){
        echo "<div id=\"skrypt\">";
        echo "<img src=".$wiersz['zdjecie']." alt='warzywniak'>";
        echo "<p><h5>".$wiersz['nazwa']."</h5></p>";
        echo "<p>Na stanie: ". $wiersz['ilosc']."</p>";
        echo "<h2>".$wiersz['cena']." zł</h2>";
        echo "</div>";

    }
    mysqli_close($polaczenie);
    ?>
    </div>
    <div id="stopka">
        <form>
        Nazwa:<input></type>
        Cena:<input></type>
            <input type="button" value="Dodaj produkt">
        </form>
        Stronę wykonał: PESLE
    </div>
</body>
</html>