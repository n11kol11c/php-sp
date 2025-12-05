<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 5 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $jelo = [
            "Pizza" => ["cijena" => 800, "kolicina" => 10],
            "Pasta" => ["cijena" => 500, "kolicina" => 80],
            "Salata" => ["cijena" => 300, "kolicina" => 15]
        ];

        $jelo["Burger"] = [
            "cijena" => 600,
            "kolicina" => 5
        ];

        foreach ($jelo as $ime => $x) {
            $jelo[$ime]["cijena"] += 50;
        }

        echo "<br>Posle povecanja cijene: <br>";
        foreach ($jelo as $ime => $x) {
            echo "<br>Ime: " . $ime . " cijena: " .$x["cijena"] . " kolicina: " . $x["kolicina"];
        }

        echo "<br />";

        echo "<br>Jela sa manjom cijenom od 400: <br /><br>";

        foreach ($jelo as $ime => $p) {
            if ($jelo[$ime]["cijena"] < 400) {
                echo "Ime: " . $ime . " cijena: " . $p["cijena"] . " kolicina: " . $p["kolicina"];
            }
        }

        echo "<br />";
        $imena = array_keys($jelo);
        $privElm = $imena[0];
        $najmanja = $privElm;

        $najmanja_kolicina = $jelo[$najmanja]["kolicina"];

        foreach ($jelo as $ime => $p) {
            if ($jelo[$ime]["kolicina"] < $najmanja_kolicina) {
                $najmanja_kolicina = $jelo[$ime]["kolicina"];
                $najmanja = $ime;
            }
        }

        unset($jelo[$najmanja]);

        foreach ($jelo as $ime => $x) {
            echo "<br>Ime: " . $ime . " cijena: " .$x["cijena"] . " kolicina: " . $x["kolicina"];
        }
    ?>
</body>
</html>
