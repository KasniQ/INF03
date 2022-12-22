<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl4.css">
    <title>Forum o psach</title>
</head>
<body>
    <div id="baner">
        <h1>Forum wielbicieli psów</h1>
    </div>
    <div id="lewy">
        <img src="obraz.jpg" alt="foksterier">
    </div>
    <div id="prawy1">
        <h2>Zapisz się</h2>
        <form action="" method="post">
            login: <input type="text" name="login"><br>
            hasło: <input type="password" name="haslo1"><br>
            powtórz hasło: <input type="password" name="haslo2"><br>
            <input type="submit" value="Zapisz">
            
        </form>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','psy');

            if(empty($_POST['login'])|| empty($_POST['haslo1']) || empty($_POST['haslo2'])){
                echo "<p>";
                echo "wypełnij wszystkie pola";
                echo "</p>";
            }else{
                $login=$_POST['login'];
                $haslo1=$_POST['haslo1'];
                $haslo2=$_POST['haslo2'];
                $zapytanie="SELECT login FROM uzytkownicy where login like '$login';";
                $wynik = mysqli_query($polaczenie,$zapytanie);
                $ile = mysqli_fetch_array($wynik);
                if($ile!=0){
                    echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                }else if($haslo1 != $haslo2){
                    echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                }else{
                    $haslo_szyfr=sha1($haslo1);
                    $zapytanie2="insert into uzytkownicy values (NULL,'$login', '$haslo_szyfr');";
                    $wynik2=mysqli_query($polaczenie,$zapytanie2);
                    if($wynik2){
                        echo "<p>Konto zostało dodane</p>";
                    }
                }
            }
            mysqli_close($polaczenie);
            ?>
    </div>
    <div id="prawy2">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div id="stopka">
        Stronę wykonał:PESEL
    </div>
</body>
</html>