<?php
    $ime_error = $prezime_error = $pozicija_error = $neto_plata_error = "";
    $ime = $prezime = $pozicija = $neto_plata = $bruto_plata = "";

    function provjeri_podatke($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (empty($_POST["ime"])) {
            $ime_error = "Polje za ime je prazno.";
        } else {
            $ime = provjeri_podatke($_POST["ime"]);
            if (!preg_match("/^[a-zA-ZšđčćžŠĐČĆŽ ]+$/u", $ime)) {
                $ime_error = "Ime smije sadrzati samo slova i razmake.";
            }
        }

        if (empty($_POST["prezime"])) {
            $prezime_error = "Polje za prezime je prazno.";
        } else {
            $prezime = provjeri_podatke($_POST["prezime"]);
            if (!preg_match("/^[a-zA-ZšđčćžŠĐČĆŽ ]+$/u", $prezime)) {
                $prezime_error = "Prezime smije sadrzati samo slova i razmake.";
            }
        }

        if (empty($_POST["pozicija"])) {
            $pozicija_error = "Polje za poziciju je prazno.";
        } else {
            $pozicija = provjeri_podatke($_POST["pozicija"]);
        }

        if (empty($_POST["neto_plata"])) {
            $neto_plata_error = "Polje za neto platu je prazno.";
        } else {
            $neto_plata = provjeri_podatke($_POST["neto_plata"]);
            if (!is_numeric($neto_plata)) {
                $neto_plata_error = "Neto plata mora biti broj.";
            } else {
                $bruto_plata = $neto_plata / 0.67;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Informacije</title>
<style>
.error { color: red; }
</style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Ime:</label>
    <input type="text" name="ime" value="<?php echo $ime; ?>">
    <span class="error"><?php echo $ime_error; ?></span>
    <br>
    <label>Prezime:</label>
    <input type="text" name="prezime" value="<?php echo $prezime; ?>">
    <span class="error"><?php echo $prezime_error; ?></span>
    <br>
    <label>Pozicija:</label>
    <input type="text" name="pozicija" value="<?php echo $pozicija; ?>">
    <span class="error"><?php echo $pozicija_error; ?></span>
    <br>
    <label>Neto plata:</label>
    <input type="text" name="neto_plata" value="<?php echo $neto_plata; ?>">
    <span class="error"><?php echo $neto_plata_error; ?></span>
    <br><br>
    <input type="submit" value="Izracunaj bruto">
    </form>
</body>
</html>

<?php
    if ($ime_error == "" && $prezime_error == "" && $pozicija_error == "" && $neto_plata_error == "") {
        echo "<h3>Podaci su poslati!</h3>";
        echo "Ime: $ime <br>";
        echo "Prezime: $prezime <br>";
        echo "Pozicija: $pozicija <br>";
        echo "Neto plata: $neto_plata <br>";
        echo "Bruto plata: " . number_format($bruto_plata, 2) . " <br>";
    }
?>
