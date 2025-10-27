<?php
    /*
        Zadatak 9
        Suma svih brojeva od 0 do 20 sa do-while petljom
    */

    $i = 0;
    $suma = 0;

    do {
        $suma += $i;
        $i++;
    } while ($i <= 20);

    echo "Suma svih brojeva od 0 do 20 je: $suma";
?>