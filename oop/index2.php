<?php
    class Smijestaj {
        public function opis(): string {
            return "Ovo je smijestaj";
        }
    }

    class Sator extends Smijestaj {
        public function opis(): string
        {
            $opis = parent::opis();
            return $opis . " - Ovo je kamp varijanta.";
        }
    }

    $sator = new Sator();
    echo $sator->opis();
?>
