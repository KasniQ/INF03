<?php
    $url='localhost';
    $user='root';
    $passw='';
    $bd='ee09';
    $polaczenie=mysqli_connect($url,$user,$passw,$bd);
    if(!empty($_POST['karetka']) && !empty($_POST['ratownik1']) && !empty($_POST['ratownik2']) && !empty($_POST['ratownik3'])){
        $karetka=$_POST['karetka'];
        $ratownik1=$_POST['ratownik1'];
        $ratownik2=$_POST['ratownik2'];
        $ratownik3=$_POST['ratownik3'];
        $zapytanie="insert into ratownicy values (NULL, '$karetka', '$ratownik1', '$ratownik2', '$ratownik3');";
        $wynik=mysqli_query($polaczenie,$zapytanie);
        echo "Do bazy zostało wysłane zapytanie: ";
        echo "insert into ratownicy values (NULL, ".$karetka.", ".$ratownik1.", ".$ratownik2.", ".$ratownik3.");";
    }


    mysqli_close($polaczenie);
?>