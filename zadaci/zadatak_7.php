<?php
    /*
        Zadatak 7
        Suma svih parnih brojeva od 1 do 100
    */

    $suma = 0;

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $suma += $i;
        }
    }

    echo "Suma neparnih brojeva do 100 je: $suma";
?>