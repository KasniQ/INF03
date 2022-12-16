<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl5.css">
    <title>Mój kalendarz</title>
</head>
<body>
    <div id="baner1">
    <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div id="baner2">
    <h1>KALENDARZ</h1>
    <?php
    $url='localhost';
    $user='root';
    $passwd='';
    $bd='egzamin5';
    $polaczenie=mysqli_connect($url,$user,$passwd,$bd);
    $zapytanie="SELECT miesiac,rok FROM `zadania` WHERE miesiac='lipiec';";
    $wynik=mysqli_query($polaczenie,$zapytanie);
    $wynik1=mysqli_fetch_array($wynik);
    echo "<h3>";
    echo "miesiąc: ".$wynik1['miesiac']." rok: ".$wynik1['rok'];
    echo "</h3>";
    ?>
    </div>
    <div id="glowny">
    <?php
    $zapytanie2="SELECT dataZadania, wpis FROM `zadania` WHERE miesiac='lipiec';";
    $wynik2=mysqli_query($polaczenie,$zapytanie2);
    foreach($wynik2 as $wiersz){
        echo '<div class="skrypt">';
        echo '<h5>';
        echo $wiersz['dataZadania'];
        echo '</h5>';
        echo '<p>';
        echo $wiersz['wpis'];
        echo '</p>';
        echo '</div>';
    } 
    ?>
    </div>
    <div id="stopka">
    <form action="" method="post">
        dodaj wpis: <input name="wpis">
        <input type="submit" value="DODAJ">
    </form>
    <?php
    $a=$_POST['wpis'];
    if(!empty($_POST['wpis'])){
        $zapytanie3="UPDATE `zadania` SET `wpis` = '$a' WHERE `dataZadania` like '2020%07%13';";
        mysqli_query($polaczenie,$zapytanie3);
    }   
    mysqli_close($polaczenie);
    ?>
    <p>Stronę wykonał:235732895</p>
    </div>
</body>
</html>