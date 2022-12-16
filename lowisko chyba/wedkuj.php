<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl_1.css">
	<title>Wędkujemy</title>
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    
        <div id="lewy">
            <h2>Ryby drapieżne naszych wód</h2>
			<?php
			$serwer="localhost";
			$user="root";
			$haslo="";
			$bd="wedkowanie45";
			$polaczenie=mysqli_connect($serwer,$user,$haslo,$bd) or die("1312");
			$zapytanie1="select nazwa, wystepowanie from ryby where styl_zycia=1;";
			$wynik=mysqli_query($polaczenie,$zapytanie1);
			foreach($wynik as $wiersz){
				echo "<ul>";
				echo "<li>".$wiersz['nazwa'].", występowanie: ".$wiersz['wystepowanie']."</li>";
				echo "</ul>";
			}
			mysqli_close($polaczenie);
			?>
        </div>
        <div id="prawy">
            <img src="ryba.jpg" alt="Sum">
            <br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    <div id="stopka">
            <p>Stronę wykonał:LEGIA MISTRZEM POLSKI</p>
    </div>
</body>
</html>