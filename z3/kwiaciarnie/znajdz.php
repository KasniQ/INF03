<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Kwiaty</title>
</head>
<body>
    <div id="baner">
        <h1>Moje kwiaty</h1>
    </div>
    <div id="lewy">
        <h3>Kwiaty dla Ciebie!</h3>
        <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
        <a href="znajdz.php">Znajdź kwiaciarnię</a><br>
        <img src="gozdzik.jpg" alt="Goździk">
    </div>
    <div id="prawy">
    <img src="gozdzik.jpg" alt="Goździk">
    <img src="gerbera.jpg" alt="Gerbera">
    <img src="roza.jpg" alt="Róża"><br>
    <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
    <form action="" method="POST">
        <input name="miasto">
        <input type="submit" value="SPRAWDŹ"><br>
        <?php
        $url='localhost';
        $user='root';
        $passwd='';
        $bd='kwiaciarnia';
        $polaczenie=mysqli_connect($url,$user,$passwd,$bd);
        $miejsce=$_POST['miasto'];
        if(!empty($_POST['miasto'])){
        $zapytanie="SELECT nazwa,ulica FROM `kwiaciarnie` where miasto='$miejsce';";
        $wynik=mysqli_query($polaczenie,$zapytanie);
        foreach($wynik as $wiersz){
            echo $wiersz['nazwa'].", ";
            echo $wiersz['ulica'];
        }
    }
        mysqli_close($polaczenie);
        ?>
    </form>
    </div>
    <div id="stopka">
        <h3>Stronę opracował: 94325875432</h3>
    </div>
</body>
</html>