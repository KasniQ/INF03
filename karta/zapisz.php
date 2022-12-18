<?php
            $url='localhost';
            $user='root';
            $passwd='';
            $bd='wedkowanie';
            $polaczenie=mysqli_connect($url,$user,$passwd,$bd);
            if(isset($_POST['imie'])&& isset($_POST['nazwisko'])&& isset($_POST['adres'])){
                $imie=$_POST['imie'];
                $nazwisko=$_POST['nazwisko'];
                $adres=$_POST['adres'];
                $zapytanie="INSERT INTO `karty_wedkarskie` VALUES (NULL, '$imie', '$nazwisko', '$adres', NULL, NULL);";
                $wynik=mysqli_query($polaczenie,$zapytanie);
            }
            mysqli_close($polaczenie);
        ?>