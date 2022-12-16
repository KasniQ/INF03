<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>
<body>
    <div id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecze">
    <?php
    $url='localhost';
    $user='root';
    $password='';
    $bd='egzmainnnn';
    $polaczenie=mysqli_connect($url,$user,$password,$bd);
    $zapytanie="SELECT zespol1, zespol2, wynik, data_rozgrywki FROM `rozgrywka` WHERE zespol1='EVG'";
    $wynik=mysqli_query($polaczenie,$zapytanie);
    foreach($wynik as $wiersz){
        echo '<div class="skrypt">';
        echo '<h3>';
        echo $wiersz['zespol1']." - ".$wiersz['zespol2'];
        echo '</h3>';
        echo '<h4>';
        echo $wiersz['wynik'];
        echo '</h4>';
        echo '<p> w dniu:';
        echo $wiersz['data_rozgrywki'];
        echo '</p>';
        echo '</div>';
    }
    ?>
    </div>
    <div id="glowny">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="lewy">
        <p> Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
    <form action="" method="post">
        <input type="number" name="pozycja"> 
        <input type="submit" value="Sprawdź">
    </form>
        <ul>
    <?php
    //if(isset($_POST['pozycja'])){
    if(!empty($_POST['pozycja'])){
    $poz = $_POST['pozycja'];
    $zapytanie2="SELECT imie,nazwisko from zawodnik where pozycja_id=$poz;";
    $wynik2=mysqli_query($polaczenie,$zapytanie2);
    foreach($wynik2 as $wiersz2){
        echo "<li><p>";
        echo $wiersz2['imie']." ".$wiersz2['nazwisko'];
        echo "</li></p>";
    }
    }
    mysqli_close($polaczenie);
    ?>
        </ul>
    </div>
    <div id="prawy">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor:PESEL</p>
    </div>
</body>
</html>