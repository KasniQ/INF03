<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl5.css">
    <title>Portal społecznościowy</title>
</head>
<body>
    <div id="baner">
        <h2>Nasze osiedle</h2>
    </div>
    <div id="baner2">
    <?php
    $polaczenie=mysqli_connect('localhost','root','','portal');
    $zapytanie="select count(*) from dane;";
    $wynik=mysqli_query($polaczenie,$zapytanie);
    foreach($wynik as $wiersz){
    echo "<h5>Liczba użytkowników portalu:".$wiersz['count(*)']."</h5>";
    }
    ?>
    </div>
    <div id="lewy">
    <h3>Logowanie</h3>
    <form action="" method="post">
        login<br>
        <input type="text" name="login"><br>
        hasło<br>
        <input type="password" name="haslo"><br>
        <input type="submit" value="Zaloguj">
    </form>
    </div>
    <div id="prawy">
    <h3>Wizytówka</h3>
        <div id="wizytowka">
            <?php
                if(isset($_POST['login'])&& isset($_POST['haslo'])){
                $login=$_POST['login'];
                $haslo=$_POST['haslo'];
                $zapytanie2="select haslo from uzytkownicy where login like '$login';";
                $wynik2=mysqli_query($polaczenie,$zapytanie2);
                $loginek=mysqli_fetch_array($wynik2);
                if($loginek==0){
                    echo "login nie istnieje";
                }else{
                    $haslo_szyfr=sha1($haslo);
                    if($haslo_szyfr!=$loginek['haslo']){
                        echo"hasło nieprawidłowe";
                    }else{
                        $zapytanie3="select uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie from uzytkownicy join dane on dane.id=uzytkownicy.id where uzytkownicy.login='$login';";
                        $wynik3=mysqli_query($polaczenie,$zapytanie3);
                        foreach($wynik3 as $wiersz3){
                            $wiek=date('Y')-$wiersz3['rok_urodz'];
                            echo "<img src=".$wiersz3['zdjecie']." alt='osoba'>";
                            echo "<h4>";
                            echo $wiersz3['login']."(".$wiek.")";
                            echo "</h4>";
                            echo "<p> hobby:".$wiersz3['hobby']."</p>";
                            echo "<h1> <img src='icon-on.png'>".$wiersz3['przyjaciol']."</h1><br>";
                            echo "<a href='dane.html'><input type='button' value='Więcej informacji' id='przycisk'></a>";
                        }
                    }
                }
            }
            mysqli_close($polaczenie);
            ?>
        </div>
    </div>
    <div id="stopka">
    Stronę wykonał:PESEL
    </div>
</body>
</html>