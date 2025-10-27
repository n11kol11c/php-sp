<?php
    /*
        Zadatak 13
        Napisati funkciju procenatPromjene koja izracunava procenat
        izmedju stare i nove plate i ispisuje je
    */

    function procenatPromjene(int $s, int $n): float {
        $r = (($n - $s) / $s) * 100;
        return round($r, 2);
    }

    $n = 120;
    $s = 100;

    echo "Procenat promjene cjene: " . procenatPromjene($s, $n);
?>