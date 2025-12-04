<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $knjige = [
            "1984" => ["autor" => "George Orwell", "godina" => 1949, "kolicina" => 3],
            "Na Drini Cuprija" => ["autor" => "Ivo Andric", "godina" => 1945, "kolicina" => 5],
            "Mali Princ" => 
            ["autor" => "Antoine de Saint-Exupery", "godina" => 1943, "kolicina" => 2]
        ];

        $knjige["Lovac u zitu"] = [
            "autor" => "J.D. Salinger",
            "godina" => 1951,
            "kolicina" => 4
        ];

        echo "Povecanje kolicina knjiga starije od 1950: <br>";
        foreach ($knjige as $k => $v) {
            if ($v["godina"] < 1950) {
                $knjige[$k]["kolicina"] += 1;
            }
        }

        echo "Prikaz imena ucenika sa prosjekom vecim od 8 <br>";
        foreach ($knjige as $k => $v) {
            if ($v["kolicina"] < 4) {
                echo $v["autor"] . "<br>";
            }
        }

        $kljuc = array_keys($knjige);
        $kljucNajmanje = $kljuc[0];
        $najmanjaKolicina = $knjige[$kljucNajmanje]["kolicina"];

        foreach ($knjige as $k => $v) {
            if ($v["kolicina"] < $najmanjaKolicina) {
                $najmanjaKolicina = $v["kolicina"];
                $kljucNajmanje = $k;
            }
        }

        unset($knjige[$kljucNajmanje]);

        echo "Obrisana knjiga sa najmanjom kolicinom: $kljucNajmanje<br>";
    ?>
</body>
</html>
