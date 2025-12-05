<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 4 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $ekipe = [
            "Tim A" => ["pobjede" => 5, "porazi" => 2, "nerijeseno" => 1],
            "Tim B" => ["pobjede" => 3, "porazi" => 4, "nerijeseno" => 2],
            "Tim C" => ["pobjede" => 6, "porazi" => 1, "nerijeseno" => 0],
        ];

        $ekipe["Tim D"] = [
            "pobjede" => 2,
            "porazi" => 3,
            "nerijeseno" => 2
        ];

        echo "<br>Ukupan broj utakmica za svaki tim: <br>";
        foreach ($ekipe as $tim => $mec) {
            echo array_sum($ekipe[$tim]) . ", ";
        }

        echo "<br />";

        $pobjede = [$ekipe["Tim A"]["pobjede"], 
                    $ekipe["Tim B"]["pobjede"],
                    $ekipe["Tim C"]["pobjede"],
                    $ekipe["Tim D"]["pobjede"]];

        foreach ($ekipe as $tim => $p) {
            $broj = max($pobjede);

            if ($ekipe[$tim]["pobjede"] == $broj) {
                echo "<br>Ekipa sa najvise pobjeda - " . $tim . " - broj pobjeda: " . $broj;
            }
        }
        

        $porazi = [$ekipe["Tim A"]["porazi"], 
                    $ekipe["Tim B"]["porazi"],
                    $ekipe["Tim C"]["porazi"],
                    $ekipe["Tim D"]["porazi"]];

        $najvise_poraza = max($porazi);

        foreach ($ekipe as $tim => $p) {
            if ($ekipe[$tim]["porazi"] == $najvise_poraza) {
                echo "<br>Ekipa sa najvise poraza: " . $tim . " - broj poraza: " .$najvise_poraza;
                unset($ekipe[$tim]["porazi"]);
            }
        }

    ?>
</body>
</html>
