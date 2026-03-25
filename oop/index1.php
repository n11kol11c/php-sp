<?php
    class Kurs {
        public string $naslov;
        private int|float $cijena;

        public function __construct(string $naslov, int|float $cijena) {
            $this->naslov = $naslov;
            $this->cijena = $cijena;
        }

        public function ispis(): void {
            echo "<span>Naslov: " . $this->naslov . "<br />";
            echo "<span>Cijena: " . $this->cijena;
        }
    }

    $kurs = new Kurs("Programiranje", cijena: 200.5);
    $kurs->ispis();
?>
