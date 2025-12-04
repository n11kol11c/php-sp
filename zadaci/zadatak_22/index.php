<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nizovi u PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="ktn" class="ktn">
        <div id="celija" class="celija">
            <h1>Celija 1: Niz Studenti</h1>
            <?php
                $studenti = array("Student #1", "Student #2", "Student #3");

                foreach ($studenti as $s) echo "$s <br />";
            ?>
        </div>

        <div id="celija" class="celija">
            <h1>Celija 2: Asocijativni Niz</h1>
            <?php
                $gradovi = array(
                    "NK" => "Niksic",
                    "BR" => "Bar",
                    "TV" => "Tivat"
                );

                foreach ($gradovi as $k => $v) echo "$k: $v <br />";
            ?>
        </div>

        <div id="celija" class="celija">
            <h1>Celija 3: Niz Boja</h1>
            <?php
                $boje = array("Crvena", "Zelena", "Plava");

                echo "Broj elemenata niza: " . count($boje) . "<br />";
                echo "Elemenat sa indeksom [0]: " . $boje[0] . "<br />";

                array_push($boje, "Zuta", "Bijela");
                unset($boje[0]);

                echo "Novi niz: <br>";

                foreach ($boje as $b) echo "$b <br>";

                sort($boje);
                
                echo "Posle sortiranja: <br>";

                foreach ($boje as $b) echo "$b <br>";
            ?>
        </div>

        <div id="celija" class="celija">
            <h1>Celija 4: Asocijativni Niz Fakultet</h1>
            <?php
                $fakultet = array(
                    "ETF" => "Elektrotehnicki fakultet",
                    "PMF" => "Prirodno-matematicki fakultet",
                    "GF" => "Gradjevinski fakultet"
                );

                echo "Originalni niz: <br>";
                foreach ($fakultet as $k => $v) echo "$k: $v<br>";

                echo "Sortiran po kljucevima: <br>";
                ksort($fakultet);
                foreach ($fakultet as $k => $v) echo "$k: $v<br>";

                echo "Sortiran po vrijednostima: <br>";
                asort($fakultet);
                foreach ($fakultet as $k => $v) echo "$k: $v<br>";
            ?>
        </div>
    </div>

    <script src="app.js" lang="javascript"></script>
</body>
</html>
