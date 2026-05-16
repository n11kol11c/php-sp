<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $message = "";

    $connection = new mysqli($db_host, $db_user, $db_password);

    if ($connection->connect_error) {
        die("Database Connection Error: " . $connection->connect_error);
    } else {
        $message =  "<span>Connected to Database</span><br />";
    }


    $db_create_query = "CREATE DATABASE IF NOT EXISTS ucenici";
    $connection->query($db_create_query);

    $connection->select_db("ucenici");

    $db_create_table1 = "CREATE TABLE IF NOT EXISTS prvi(
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            ime VARCHAR(64) NOT NULL,
                            prezime VARCHAR(64) NOT NULL,
                            prosjek_string VARCHAR(128) NOT NULL,
                            prosjek DECIMAL(10,2)
                        )";
    
    $db_create_table2 = "CREATE TABLE IF NOT EXISTS drugi(
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            ime VARCHAR(64) NOT NULL,
                            prezime VARCHAR(64) NOT NULL,
                            prosjek_string VARCHAR(128) NOT NULL,
                            prosjek DECIMAL(10,2)
                        )";

    $db_create_table3 = "CREATE TABLE IF NOT EXISTS treci(
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            ime VARCHAR(64) NOT NULL,
                            prezime VARCHAR(64) NOT NULL,
                            prosjek_string VARCHAR(128) NOT NULL,
                            prosjek DECIMAL(10,2)
                        )";

    $db_create_table4 = "CREATE TABLE IF NOT EXISTS cetvrti(
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            ime VARCHAR(64) NOT NULL,
                            prezime VARCHAR(64) NOT NULL,
                            prosjek_string VARCHAR(128) NOT NULL,
                            prosjek DECIMAL(10,2)
                        )";

    $connection->query($db_create_table1);
    $connection->query($db_create_table2);
    $connection->query($db_create_table3);
    $connection->query($db_create_table4);

    $unesi_marka_query = "INSERT INTO cetvrti (ime, prezime, prosjek_string, prosjek) 
                          VALUES ('Marko', 'Markovic', 'odlican', 4.55)";
    $rezultat_unosa = $connection->query($unesi_marka_query);

    if ($rezultat_unosa) {
        $message .= "Uspesno dodat ucenik: Marko Markovic 4.55 odlican<br />";
    }

    $rezultat_prvi = $connection->query("SELECT * FROM prvi");
    $rezultat_drugi = $connection->query("SELECT * FROM drugi");
    $rezultat_treci = $connection->query("SELECT * FROM treci");
    $rezultat_cetvrti = $connection->query("SELECT * FROM cetvrti");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP MySQL</title>
</head>
<body>
    <?php if ($message) echo $message; ?>

    <h2>Prvi razred</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Ocena (opisno)</th>
            <th>Prosek</th>
        </tr>
        <?php while ($red = $rezultat_prvi->fetch_assoc()): ?>
        <tr>
            <td><?php echo $red['id']; ?></td>
            <td><?php echo $red['ime']; ?></td>
            <td><?php echo $red['prezime']; ?></td>
            <td><?php echo $red['prosjek_string']; ?></td>
            <td><?php echo $red['prosjek']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Drugi razred</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Ocena (opisno)</th>
            <th>Prosek</th>
        </tr>
        <?php while ($red = $rezultat_drugi->fetch_assoc()): ?>
        <tr>
            <td><?php echo $red['id']; ?></td>
            <td><?php echo $red['ime']; ?></td>
            <td><?php echo $red['prezime']; ?></td>
            <td><?php echo $red['prosjek_string']; ?></td>
            <td><?php echo $red['prosjek']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Treci razred</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Ocena (opisno)</th>
            <th>Prosek</th>
        </tr>
        <?php while ($red = $rezultat_treci->fetch_assoc()): ?>
        <tr>
            <td><?php echo $red['id']; ?></td>
            <td><?php echo $red['ime']; ?></td>
            <td><?php echo $red['prezime']; ?></td>
            <td><?php echo $red['prosjek_string']; ?></td>
            <td><?php echo $red['prosjek']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Cetvrti razred</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Ocena (opisno)</th>
            <th>Prosek</th>
        </tr>
        <?php while ($red = $rezultat_cetvrti->fetch_assoc()): ?>
        <tr>
            <td><?php echo $red['id']; ?></td>
            <td><?php echo $red['ime']; ?></td>
            <td><?php echo $red['prezime']; ?></td>
            <td><?php echo $red['prosjek_string']; ?></td>
            <td><?php echo $red['prosjek']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
