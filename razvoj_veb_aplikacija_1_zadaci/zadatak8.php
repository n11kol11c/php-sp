<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 8 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $proizvodi = [
            "Laptop" => ["cijena" => 70000, "kolicina" => 5],
            "Telefon" => ["cijena" => 30000, "kolicina" => 10],
            "Tablet" => ["cijena" => 20000, "kolicina" => 8]
        ];

        $proizvodi["Smartwatch"] = [
            "cijena" => 15000,
            "kolicina" => 3
        ];

        echo "Ispis svih proizvoda:<br>";

        foreach ($proizvodi as $naziv => $info) {
            echo "<br><br>Naziv: $naziv" . "<br>cijena: " . $info['cijena'] . 
            "<br>kolicina: " . $info['kolicina'];
        }

        echo "<br><br>Povecanje cijene svakom proizvodu za 10%:<br>";

        foreach ($proizvodi as $naziv => $info) {
            $proizvodi[$naziv]['cijena'] *= 1.10;
        }

        foreach ($proizvodi as $naziv => $info) {
            echo "<br><br>Naziv: $naziv" . "<br>cijena: " . $info['cijena'] . 
            "<br>kolicina: " . $info['kolicina'];
        }

        echo "<br>Proizvodi sa manjom cijenom od 25000:<br>";

        foreach ($proizvodi as $naziv => $info) {
            if ($proizvodi[$naziv]['cijena'] < 25000) {
                echo "<br><br>Naziv: $naziv" . "<br>cijena: " . $info['cijena'] . 
                "<br>kolicina: " . $info['kolicina'];
            }
        }

        $nazivi = array_keys($proizvodi);
        $priv_proizvod = $nazivi[0];

        $najmanja = $priv_proizvod;
        $najmanja_kolicina = $proizvodi[$najmanja]['kolicina'];

        foreach ($proizvodi as $naziv => $info) {
            if ($proizvodi[$naziv]['kolicina'] < $najmanja_kolicina) {
                $najmanja = $naziv;
                $najmanja_kolicina = $proizvodi[$naziv]['kolicina'];
            }
        }

        unset($proizvodi[$najmanja]);

        echo "<br>Posle brisanja proizvoda sa najmanje kolicine:<br>";

        foreach ($proizvodi as $naziv => $info) {
            echo "<br><br>Naziv: $naziv" . "<br>cijena: " . $info['cijena'] . 
            "<br>kolicina: " . $info['kolicina'];
        }
    ?>
</body>
</html>
