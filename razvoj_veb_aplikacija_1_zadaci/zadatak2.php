<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php 
        $studenti = [
            "Marko" => ["matematika" => 8, "fizika" => 9, "hemija" => 7],
            "Ana" => ["matematika" => 10, "fizika" => 9, "hemija" => 8],
            "Jovana" => ["matematika" => 6, "fizika" => 7, "hemija" => 5],
        ];

        $studenti["Milica"] = [
            "matematika" => 7,
            "fizika" => 8,
            "hemija" => 6
        ];

        $prosjek_za_marka = (
            $studenti["Marko"]["matematika"] + 
            $studenti["Marko"]["fizika"] +
            $studenti["Marko"]["hemija"]) / 3;
        
        $prosjek_za_anu = (
            $studenti["Ana"]["matematika"] + 
            $studenti["Ana"]["fizika"] +
            $studenti["Ana"]["hemija"]) / 3;
        
        $prosjek_za_jovanu = (
            $studenti["Jovana"]["matematika"] + 
            $studenti["Jovana"]["fizika"] +
            $studenti["Jovana"]["hemija"]) / 3;


        echo "Ucenici sa prosjecnom ocjenom vecom od 8:<br>";

        foreach ($studenti as $ime => $ocjene) {
            $prosjek = array_sum($ocjene) / count($ocjene);

            if ($prosjek > 8) {
                echo "<br>Ime: $ime - prosjek: " . round($prosjek, 2);
            }
        }
        
        foreach ($studenti as $ime => $ocjene) {
            if ($studenti[$ime]["matematika"] < 10) {
                $studenti[$ime]["matematika"] += 1;
            }
        }

        $imena = array_keys($studenti);
        $prvi = $imena[0];

        $najmanji = $prvi;
        $najmanji_prosjek = array_sum($studenti[$prvi]) / count($studenti[$prvi]);

        foreach ($studenti as $ime => $ocjene) {
            $prosjek = array_sum($ocjene) / count($ocjene);
        
            if ($prosjek < $najmanji_prosjek) {
                $najmanji = $ime;
                $najmanji_prosjek = $prosjek;
            }
        }

        unset($studenti[$najmanji]);

        
    ?>
</body>
</html>
