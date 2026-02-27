<?php
$ime = $lozinka = $potvrda = "";
$ime_error = $lozinka_error = $potvrda_error = "";

function provjeri_podatke($podatak) {
    $podatak = trim($podatak);
    $podatak = htmlspecialchars($podatak);
    $podatak = stripslashes($podatak);
    return $podatak;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["ime"])) {
        $ime_error = "Polje za unos imena je prazno.";
    } else {
        $ime = provjeri_podatke($_POST["ime"]);
        if (strlen($ime) < 5) {
            $ime_error = "Ime moze da sadrzi minimalno 5 karaktera.";
        }
        if (preg_match("/^[0-9]/", $ime)) {
            $ime_error = "Polje za ime ne moze da pocinje brojem.";
        }
    }

    if (empty($_POST["lozinka"])) {
        $lozinka_error = "Polje za unos lozinke je prazno";
    } else {
        $lozinka = provjeri_podatke($_POST["lozinka"]);
        if (strlen($lozinka) < 8) {
            $lozinka_error = "Lozinka mora da ima minimalno 8 karaktera.";
        }
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/", $lozinka)) {
            $lozinka_error = "Lozinka mora da sadrzi jedno veliko slovo, malo slovo i broj.";
        }
    }

    if (empty($_POST["potvrda"])) {
        $potvrda_error = "Polje za potvrdu lozinke je prazno.";
    } else {
        $potvrda = provjeri_podatke($_POST["potvrda"]);
        if (strcmp($lozinka, $potvrda) != 0) {
            $potvrda_error = "Lozinka nije jednaka.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Validation</title>
<style>
.success { color: green; }
.error { color: red; }
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label>Korisnicko ime:</label>
    <input type="text" name="ime" placeholder="Unesite korisnicko ime" value="<?php echo $ime; ?>">
    <span class="error"><?php echo $ime_error; ?></span>
    <br>

    <label>Lozinka:</label>
    <input type="password" name="lozinka" placeholder="Unesite lozinku">
    <span class="error"><?php echo $lozinka_error; ?></span>
    <br>

    <label>Ponovite lozinku:</label>
    <input type="password" name="potvrda" placeholder="Potvrdite lozinku">
    <span class="error"><?php echo $potvrda_error; ?></span>
    <br>

    <input type="submit" value="Posalji">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" &&
    empty($ime_error) && empty($lozinka_error) && empty($potvrda_error)) {
    echo "<h2>Login</h2>";
    echo "<p class='success'>Korisnicko ime: $ime</p>";
    echo "<p class='success'>Lozinka: $lozinka</p>";
    echo "<p class='success'>Potvrda lozinke: $potvrda</p>";
}
?>
</body>
</html>
