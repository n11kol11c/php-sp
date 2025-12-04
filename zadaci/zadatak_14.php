<?php
    /*
        Zadatak 14
        Napisi funkciju koja ce izracunati kamatu
    */

    function izracunajKamatu($g, $s, $gd) {
        $r = $g + ($g * $s * $gd / 100);
        return $r;
    }

    echo "Ukupan iznos duga: " . izracunajKamatu(1000, 5, 3);
?>