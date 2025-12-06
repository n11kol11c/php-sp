<?php
    $rezultati = [
        "Ana" => ["bodovi" => 95],
        "Bojana" => ["bodovi" => 78],
        "Ivana" => ["bodovi" => 84]
    ];

    $rezultati["Milan"] = ["bodovi" => 88];

    echo "Takmicari sa bodovima iznad 80:<br>";
    foreach ($rezultati as $ime => $podaci) {
        if ($podaci["bodovi"] > 80) {
            echo "$ime: {$podaci['bodovi']}, ";
        }
    }

    $najmanje_bodova = min(array_column($rezultati, 'bodovi'));

    foreach ($rezultati as $ime => $podaci) {
        if ($podaci['bodovi'] == $najmanje_bodova) {
            unset($rezultati[$ime]);
            break;
        }
    }

    echo "<br><br>Preostali rezultati:<br>";

    foreach ($rezultati as $ime => $podaci)
    {
        echo "$ime: {$podaci['bodovi']}<br>";
    }
?>
