<?php
    $n = array(9, 4, 2, 5, 7, 1, 8);
    $najmanji = $n[0];

    for ($i = 0; $i <= count($n) - 1; $i++) {
        if ($n[$i] < $najmanji) {
            $najmanji = $n[$i];
        }
    }
    echo "Najmanji broj iz niza je: $najmanji";
?>
