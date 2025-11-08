<?php
$niz = [4, 5, 1, 7, 9, 3, 2];

for ($i = 0; $i < count($niz) - 1; $i++) {
    for ($j = 1; $j < count($niz) - $i; $j++) {
        if ($niz[$j] < $niz[$j - 1]) {
            $x = $niz[$j];
            $niz[$j] = $niz[$j - 1];
            $niz[$j - 1] = $x;
        }
    }
}

echo "Sortiran niz: <br />";

foreach ($niz as $e) {
    echo "$e, ";
}
?>
