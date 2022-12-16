<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Lista przyjaciół</title>
</head>
<body>
    <div id="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div id="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka,</li>
            <li>film,</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
    <?php
    $url='localhost';
    $id='root';
    $haslo='';
    $baza_danych="dane";

    $polaczenie=mysqli_connect($url,$id,$haslo,$baza_danych) or die("Błąd");
    $zapytanie= "select imie, nazwisko ,opis, zdjecie from osoby where Hobby_id in (1,2,6)";
    $wynik=mysqli_query($polaczenie,$zapytanie);

    foreach ($wynik as $wiersz){
        echo "<div id=\"zdjecie\">";
        echo "<img src=\"".$wiersz['zdjecie']."\" alt=\"przyjaciel\">";
        echo "</div>";
        echo "<div id=\"opis\">";
        echo "<h3>";
        echo $wiersz['imie'] .$wiersz['nazwisko'];
        echo "</h3>";
        echo "<p>Ostatni wpis: ".$wiersz['opis'].  "</p>";
        echo "</div>";
        echo "<div id=\"linia\"><hr></div>";
    }
    mysqli_close($polaczenie);
    ?>
    <!--<div id="zdjecie">
        <img src="$polaczenie" alt="przyjaciel">
    </div>
    <div id="opis"> <h3> $polaczenie <p>Ostatni wpis: $polaczenie </p></h3></div>
    <div id="linia"><hr></div>-->
    <div id="stopkal">
        Stronę wykonał: PESEL
    </div>
    <div id="stopkap">
        <a href="mailto: ja@portal.pl">napisz do mnie</a>
    </div>
</body>
</html>