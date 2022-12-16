<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl3.css">
    <title>Wycieczki i urlopy</title>
</head>
<body>
    <div id="baner">
    <h1>BIURO PODRÓŻY</h1>
    </div>
    <div id="lewy">
    <h2>KONTAKT</h2>
    <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
    <p>telefon:555666777</p>
    </div>
    <div id="srodkowy">
    <h2>GALERIA</h2>
    <?php
    $url='localhost';
    $user='root';
    $passwd='';
    $bd='egzamin3';
    $polaczenie=mysqli_connect($url,$user,$passwd,$bd);
    $zapytanie="select nazwaPliku, podpis from zdjecia order by podpis asc;";
    $wynik=mysqli_query($polaczenie,$zapytanie);
    foreach($wynik as $wiersz){
        echo "<img src=".$wiersz['nazwaPliku']." alt=".$wiersz['podpis'].">";

    }
    ?>
    </div>
    <div id="prawy">
    <h2>PROMOCJE</h2>
    <table>
        <tr>
            <td>Jesień</td>
            <td>Grupa 4+</td>
            <td>Grupa 10+</td>
        </tr>
        <tr>
            <td>5%</td>
            <td>10%</td>
            <td>15%</td>
        </tr>
    </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
        $zapytanie1="select id,dataWyjazdu,cel,cena from wycieczki where dostepna=1;";
        $wynik1=mysqli_query($polaczenie,$zapytanie1);
        foreach($wynik1 as $wiersz1){
            echo $wiersz1['id'].". ";
            echo $wiersz1['dataWyjazdu'].", ";
            echo $wiersz1['cel'].", ";
            echo "cena: ".$wiersz1['cena'];
            echo "<br>";
        }
        mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
    <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>