<?php
    class Posjetilac {
        public static int $brojac = 0;
        public function __construct() {
            self::$brojac++;
        }

        public function __toString()
        {
            return "" . self::$brojac;
        }
    }

    $p1 = new Posjetilac();
    $p2 = new Posjetilac();
    $p3 = new Posjetilac();

    echo "Broj posjetilaca: $p3";
?>
