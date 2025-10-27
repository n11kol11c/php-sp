<?php
    /*
        Zadatak 10
        switch-case primjer sa brojem dana u nedelji
    */

    $dan = 3;

    switch ($dan) {
        case 1: echo "Trenutni dan: Ponedeljak"; break;
        case 2: echo "Trenutni dan: Utorak"; break;
        case 3: echo "Trenutni dan: Srijeda"; break;
        case 4: echo "Trenutni dan: Cetvrtak"; break;
        case 5: echo "Trenutni dan: Petak"; break;
        case 6: echo "Trenutni dan: Subota"; break;
        case 7: echo "Trenutni dan: Nedelja"; break;
        default: echo "Pogresan unos dana";
    }
?>