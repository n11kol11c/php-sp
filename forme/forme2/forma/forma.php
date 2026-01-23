<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $ime = trim($_POST["ime"]);

        if (strlen($ime) > 32) {
            echo "<br>Ime ne moze da sadrzi vise od 32 karaktera";
        }

        if (!ctype_alpha($ime)) {
            echo "<br>Polje za upis imena ne moze da sadrzi brojeve ili specijalne karaktere";
        }

        echo "<br><i>$ime</i>";
    } else {
        echo "<br />Server metoda nije post";
    }
?>
