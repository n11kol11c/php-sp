<?php
    /*
        Zadatak 8
        Suma brojeva od 0 do 10 sa while petljom
    */

    $i = 0;
    $suma = 0;

    while ($i <= 10) {
        $suma += $i;
        $i++;
    }

    echo "Suma svih brojeva od 0 do 10 je: $suma";
?>