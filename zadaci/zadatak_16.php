<?php
    $broj = 0;
    $txt = "banana";

    for ($i = 0; $i <= strlen($txt) - 1; $i++) {
        if ($txt[$i] == "a") {
            $broj++;
        }
    }

    echo "Broj ponavljanja slova 'a': " . $broj;
?>
