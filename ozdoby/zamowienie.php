<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep</title>
</head>
<body>
    <div id="baner">
        <h1>Ozdoby - sklep</h1>
    </div>
    <div id="lewy">
        <h2>OZDOBY</h2>
        <a href="galeria.html">Galeria</a><br>
        <a href="zamowienie.php">Zamówienie</a>
    </div>
    <div id="srodkowy">
        <p>Dodaj użytkownika</p>
        <form action="zamowienie.php" method="post">
            Imię: <input type="text" name="imie"><br>
            Nazwisko: <input type="text" name="nazwisko"><br>
            e-mail: <input type="email" name="email"><br>
            <button>WYŚLIJ</button>
        </form>
        <?php
        //$conn=mysqli_connect('localhost','root','','sklep');
        $url='localhost';
        $user='root';
        $password='';
        $bd='sklep';
        $polaczenie=mysqli_connect($url,$user,$password,$bd);
        if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['email'])){
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $email=$_POST['email'];
            $sql="insert into zamowienia values ('','$imie','$nazwisko','$email',NULL,NULL,NULL,NULL)";
            mysqli_query($polaczenie,$sql);
        }
        mysqli_close($polaczenie);
        ?>
    </div>
    <div id="prawy">
        <img src="animacja.gif">
    </div>
    <div id="stopka">
        <h3>Autor strony: SZCZĘSNY KRÓL</h3>
    </div>
</body>
</html>