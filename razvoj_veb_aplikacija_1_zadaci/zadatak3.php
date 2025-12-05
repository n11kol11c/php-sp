<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $zaposleni = [
            "Marko" => ["pozicija" => "programer", "plata" => 800],
            "Ana" => ["pozicija" => "dizajner", "plata" => 600],
            "Ivan" => ["pozicija" => "menadzer", "plata" => 1200]
        ];

        $zaposleni["Mila"] = [
            "pozicija" => "analiticar",
            "plata" => 700
        ];

        foreach ($zaposleni as $k => $v) {
            $zaposleni[$k]["plata"] *= 1.10;
        }

        foreach ($zaposleni as $k => $v) {
            echo "$k - nova plata: " . $v["plata"] . "<br>";
        }

        echo "<br>Zaposleni sa vecom platom od 800: <br>";
        foreach ($zaposleni as $ime => $p) {
            if ($p["plata"] > 800) {
                echo "Ime: $ime - pozicija: " . $p["pozicija"] . " - plata: " . $p["plata"] . "<br>";
            }
        }

        $imena = array_keys($zaposleni);
        $prvi = $imena[0];

        $najmanja = $prvi;
        $najmanja_plata = $zaposleni[$prvi]["plata"];

        foreach ($zaposleni as $ime => $podaci) {
            if ($podaci["plata"] < $najmanja_plata) {
                $najmanja_plata = $podaci["plata"];
                $najmanja = $ime;
            }
        }

        unset($zaposleni[$najmanja]);
    ?>
</body>
</html>
