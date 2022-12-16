<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <div id="blewy">
        <img src="logo.png" alt="meteo">
    </div>
    <div id="bsrodkowy">
    <h1>Prognoza dla Wrocławia</h1>
    </div>
    <div id="bprawy">
        <p>maj. 2019r.</p>
    </div>

    <div id="glowny">
    <table>
        <th>DATA</th>
        <th>Temperatura w dzień</th>
        <th>Temperatura w nocy</th>
        <th>Opady [mm/h]</th>
        <th>Ćiśnienie [hPa]</th>

    <?php
    $url='localhost';
    $id='root';
    $haslo='';
    $baza_danych="prognoza";
    $polaczenie=mysqli_connect($url,$id,$haslo,$baza_danych) or die("Błąd");
    
    $zapytanie1="SELECT data_prognozy, temperatura_dzien, temperatura_noc, opady, cisnienie FROM pogoda where temperatura_dzien>=15";
    $wynik=mysqli_query($polaczenie,$zapytanie1) or die("Złe zapytanie");
    
    foreach($wynik as $wiersz){
        echo "<tr>";

        echo "<td>".$wiersz['data_prognozy']."</td>";
        echo "<td>".$wiersz['temperatura_dzien']."</td>";
        echo "<td>".$wiersz['temperatura_noc']."</td>";
        echo "<td>".$wiersz['opady']."</td>";
        echo "<td>".$wiersz['cisnienie']."</td>";

        echo "</tr>";

    }
    //mysqli_close($polaczenie);
    ?>
    </table>
    </div>

    <div id="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">

    </div>
    <div id="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
    
    <!-- <table>
    <th>DATA</th>
        <th>Temperatura w dzień</th>
        <th>Temperatura w nocy</th>
        <th>Opady [mm/h]</th>
        <th>Ćiśnienie [hPa]</th>

        <?php
        /*$zapytanie2="SELECT data_prognozy, temperatura_dzien, temperatura_noc, opady, cisnienie FROM pogoda where temperatura_dzien>15";
        $wynik2=mysqli_query($polaczenie,$zapytanie2) or die("Złe zapytanie");
        
        foreach($wynik2 as $wiersz){
            echo "<tr>";
    
            echo "<td>".$wiersz['data_prognozy']."</td>";
            echo "<td>".$wiersz['temperatura_dzien']."</td>";
            echo "<td>".$wiersz['temperatura_noc']."</td>";
            echo "<td>".$wiersz['opady']."</td>";
            echo "<td>".$wiersz['cisnienie']."</td>";
    
            echo "</tr>";
    
        }
        mysqli_close($polaczenie);
    */?></table> -->
</body>
</html>