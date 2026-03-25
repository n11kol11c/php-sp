<?php
    interface PlatniSistem {
        public function plati($iznos);
    }

    class Kartica implements PlatniSistem {
        public function plati($iznos)
        {
            echo "Placeno karticom: $iznos";
        }
    }

    class Kes implements PlatniSistem {
        public function plati($iznos)
        {
            echo "Placeno kesom: $iznos";
        }
    }

    $kartica = new Kartica();
    $kes = new Kes();

    $kartica->plati(30);
    echo "<br>";
    $kes->plati(50.2);
?>
