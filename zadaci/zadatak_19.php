<?php
    $osoba = [
        "ime" => "Marko",
        "prezime" => "Markovic",
        "godine" => 25,
        "grad" => "Niksic"
    ];

    echo "Ime: " . $osoba["ime"] . "\n";
    echo "Grad: " . $osoba["grad"] . "\n";

    $osoba["zanimanje"] = "Programer";

    $osoba["godine"] = 26;

    unset($osoba["grad"]);
    echo "\nPodaci o osobi:\n";
    foreach ($osoba as $kljuc => $vrijednost) {
        echo "$kljuc: $vrijednost\n";
    }

    echo "\nBroj elemenata niza: " . count($osoba) . "\n";
    $kljucevi = array_keys($osoba);
    $vrijednost = array_values($osoba);

    echo "Kljucevi: ";
    print_r($kljucevi);

    echo "Vrijednosti: ";
    print_r($vrijednost);

    if (array_key_exists("ime", $osoba)) {
        echo "Kljuc 'ime' postoji u nizu\n";
    }

    $dodatniPodaci = ["zemlja" => "Crna Gora", "sport" => "fudbal"];
    $spojenNiz = array_merge($osoba, $dodatniPodaci);

    echo "\nSpojeni niz:\n";
    print_r($spojenNiz);

    ksort($spojenNiz);
    echo "\nNiz sortiran po kljucevima:\n";
    print_r($spojenNiz);

    asort($spojenNiz);
    echo "\nNiz sortiran po vrijednostima:\n";
    print_r($spojenNiz);
?>
