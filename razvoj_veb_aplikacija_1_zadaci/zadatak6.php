<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 6 - Razvoj Veb Aplikacija</title>
</head>
<body>
    <?php
        $sportisti = [
            "Marko" => ["sport" => "tenis", "medalje" => 10],
            "Ana" => ["sport" => "plivanje", "medalje" => 5],
            "Ivan" => ["sport" => "kosarka", "medalje" => 8]
        ];

        $sportisti["Mila"] = [
            "sport" => "stoni tenis",
            "medalje" => 3
        ];

        foreach ($sportisti as $ime => $m) {
            echo "<br><br>Ime: " . $ime . "<br>sport: " . $sportisti[$ime]['sport'] . 
            "<br>broj medalja: " . $sportisti[$ime]['medalje'];
        }

        echo "<br>Povecanje medalja za sve sportiste koji imaju vise od 8:<br>";

        foreach ($sportisti as $ime => $m) {
            if ($sportisti[$ime]['medalje'] > 8) {
                $sportisti[$ime]['medalje'] += 2;
            }
        }

        foreach ($sportisti as $ime => $m) {
            echo "<br><br>Ime: " . $ime . "<br>sport: " . $sportisti[$ime]['sport'] . 
            "<br>broj medalja: " . $sportisti[$ime]['medalje'];
        }

        echo "<br><br>Informacije o sportistima sa manje od 6 medalja:";
        
        foreach ($sportisti as $ime => $m) {
            if ($sportisti[$ime]['medalje'] < 6) {
                echo "<br><br>Ime: " . $ime . "<br>sport: " . $sportisti[$ime]['sport'] . 
                "<br>broj medalja: " . $sportisti[$ime]['medalje'];
            }
        }

        $imena = array_keys($sportisti);
        $prvo_ime = $imena[0];

        $najmanje = $prvo_ime;
        $najmanje_medalja = $sportisti[$najmanje]['medalje'];

        foreach ($sportisti as $ime => $m) {
            if ($sportisti[$ime]['medalje'] < $najmanje_medalja) {
                $najmanje = $ime;
                $najmanje_medalja = $sportisti[$ime]['medalje'];
            }
        }

        unset($sportisti[$najmanje]);

        echo "<br><br>Posle micanja sportiste sa najmanje medalja:<br>";

        foreach ($sportisti as $ime => $m) {
            echo "<br><br>Ime: " . $ime . "<br>sport: " . $sportisti[$ime]['sport'] . 
            "<br>broj medalja: " . $sportisti[$ime]['medalje'];
        }
    ?>
</body>
</html>
