<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razvoj Veb Aplikacija I</title>
</head>
<body>
    <!-- Prikazati ucenike kroz tabelu kombinacija php-a foreach petlje i html-a -->

    <?php
        $ocjene = array("Ivan" => array("Maternji" => 4,
                                        "Matematika" => 5,
                                        "Engleski" => 4),
                        "Tamara" => array("Maternji" => 4,
                                          "Matematika" => 3, 
                                          "Engleski" => 2 ),
                        "Petar" => array("Maternji" => 4,
                                         "Matematika" => 4, 
                                         "Engleski" => 4 ),
                        );
        
        $prosjekIvan = ($ocjene["Ivan"]["Maternji"] + 
        $ocjene["Ivan"]["Matematika"] + 
        $ocjene["Ivan"]["Engleski"] ) / 3;

        $prosjekTamara = ($ocjene["Tamara"]["Maternji"] + 
        $ocjene["Tamara"]["Matematika"] + 
        $ocjene["Tamara"]["Engleski"] ) / 3;

        $prosjekPetar = ($ocjene["Petar"]["Maternji"] + 
        $ocjene["Petar"]["Matematika"] + 
        $ocjene["Petar"]["Engleski"] ) / 3;

    ?>
    
    <table border="1" cellpadding="5">
        <tr>
            <th></th>
            <th>Maternji</th>
            <th>Matematika</th>
            <th>Engleski</th>
            <th>Prosjek</th>
        </tr>

        <tr>
            <th>Ivan</th>
            <td><?php echo $ocjene["Ivan"]["Maternji"] ?></td>
            <td><?php echo $ocjene["Ivan"]["Matematika"] ?></td>
            <td><?php echo $ocjene["Ivan"]["Engleski"] ?></td>
            <td><?php echo $prosjekIvan ?></td>
        </tr>

        <tr>
            <th>Tamara</th>
            <td><?php echo $ocjene["Tamara"]["Maternji"] ?></td>
            <td><?php echo $ocjene["Tamara"]["Matematika"] ?></td>
            <td><?php echo $ocjene["Tamara"]["Engleski"] ?></td>
            <td><?php echo $prosjekTamara ?></td>
        </tr>

        <tr>
            <th>Petar</th>
            <td><?php echo $ocjene["Petar"]["Maternji"] ?></td>
            <td><?php echo $ocjene["Petar"]["Matematika"] ?></td>
            <td><?php echo $ocjene["Petar"]["Engleski"] ?></td>
            <td><?php echo $prosjekPetar ?></td>
        </tr>
    </table>

    <table border="1" cellpadding="5">
        <tr>
            <th>Ucenik</th>

            <?php foreach (array_keys($ocjene["Ivan"]) as $predmet): ?>
                <th><?php echo $predmet ?></th>
            <?php endforeach ; ?>

            <th>Prosjek</th>
        </tr>

        <?php foreach ($ocjene as $ime => $predmeti): ?>
            <tr>
                <th><?php echo $ime ; ?></th>

                <?php
                    $zbir = 0;
                    $brojPredmeta = count($predmeti);

                    foreach ($predmeti as $ocjena):
                        $zbir += $ocjena;
                ?>

                    <td><?php echo $ocjena ; ?></td>
                    <?php endforeach ; ?>
                
                <td><?php echo round($zbir / $brojPredmeta, 2); ?></td>
            </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>
