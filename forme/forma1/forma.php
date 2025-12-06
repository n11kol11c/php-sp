<?php
    require("index.php");

    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        exit(1);
    }

    $ime = $_POST['ime'];
    $sifra = $_POST['sifra'];

    echo "=======PODACI=======<br>";
    echo "Ime: $ime, sifra: $sifra";
?>
