<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $adres = $_POST['adres'];

        $p = new mysqli("localhost", "root", "", "wedkowanie" );

        $z = "INSERT INTO karty_wedkarskie ( imie, nazwisko, adres, data_zezwolenia, punkty) 
        VALUES ('$imie','$nazwisko','$adres',NULL,NULL);";

        $p->query($z);
        $p->close();

        header("Location: karta.html");
    }
?>