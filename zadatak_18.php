<?php
    function makniNegativne($niz) {
        $rezultat = [];

        foreach ($niz as $broj) {
            if ($broj >= 0) {
                $rezultat[] = $broj * $broj;
            }
        }

        sort($rezultat);

        return $rezultat;
    }


    $niz = [3, -1, 4, -2, 5];
    print_r(makniNegativne($niz));
?>
