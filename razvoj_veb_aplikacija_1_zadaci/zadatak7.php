<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 7 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $projekti = [
            "Projekat A" => ["ucesnici" => 5, "zavrseno" => 10],
            "Projekat B" => ["ucesnici" => 3, "zavrseno" => 7],
            "Projekat C" => ["ucesnici" => 6, "zavrseno" => 12]
        ];

        $projekti["Projekat D"] = [
            "ucesnici" => 4,
            "zavrseno" => 5
        ];

        echo "<br>Ispis svih projekata:<br>";

        foreach ($projekti as $naziv => $u) {
            echo "<br><br>Naziv: $naziv <br>Broj ucesnika: " . $projekti[$naziv]['ucesnici'] .
            "<br>Broj zavrsenih zadataka: " . $projekti[$naziv]['zavrseno'];
        }

        foreach ($projekti as $naziv => $u) {
            if ($projekti[$naziv]['zavrseno'] < 10) {
                $projekti[$naziv]['zavrseno'] += 2;
            }
        }

        echo "<br><br />Ispis svih projekata posle povecanja zavrsenih zadataka:<br>";

        foreach ($projekti as $naziv => $u) {
            echo "<br><br>Naziv: $naziv <br>Broj ucesnika: " . $projekti[$naziv]['ucesnici'] .
            "<br>Broj zavrsenih zadataka: " . $projekti[$naziv]['zavrseno'];
        }

        echo "<br><br />Ispis svih projekata sa vise od 5 ucesnika:<br>";

        foreach ($projekti as $naziv => $u) {
            if ($projekti[$naziv]['ucesnici'] > 5) {
                echo "<br><br>Naziv: $naziv <br>Broj ucesnika: " . $projekti[$naziv]['ucesnici'] .
                "<br>Broj zavrsenih zadataka: " . $projekti[$naziv]['zavrseno'];
            }
        }

        $nazivi = array_keys($projekti);
        $prvi_projekat = $nazivi[0];

        $najmanje = $prvi_projekat;
        $najmanje_zadataka = $projekti[$najmanje]['zavrseno'];

        foreach ($projekti as $naziv => $u) {
            if ($projekti[$naziv]['zavrseno'] < $najmanje_zadataka) {
                $najmanje = $naziv;
                $najmanje_zadataka = $projekti[$naziv]['zavrseno'];
            }
        }

        unset($projekti[$najmanje]);

        echo "<br><br>Posle brisanja projekta sa najmanje zavrsenih zadataka:<br>";

        foreach ($projekti as $naziv => $u) {
            echo "<br><br>Naziv: $naziv <br>Broj ucesnika: " . $projekti[$naziv]['ucesnici'] .
            "<br>Broj zavrsenih zadataka: " . $projekti[$naziv]['zavrseno'];
        }
    ?>
</body>
</html>
