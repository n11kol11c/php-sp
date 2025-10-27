<?php
    /* 
        Zadatak 12
        Napraviti funckiju "provjeriBroj" koji provjerava da li je broj
        paran ili neparan, pa zatim da li je int ili float
    */

        function provjeriBroj(mixed $b): void {
            if ($b % 2 == 0) {
                echo "Broj $b je paran <br />";
            } else {
                echo "Broj $b je neparan <br />";
            }

            if (is_int($b)) {
                echo "Broj $b je cijeli broj <br />";
            } elseif (is_float($b)) {
                echo "Broj $b je decimalni broj <br />";
            } else {
                echo "Vrijednost broj je nekog drugog tipa <br />";
            }
        }

        $broj = 8;

        provjeriBroj($broj);
?>