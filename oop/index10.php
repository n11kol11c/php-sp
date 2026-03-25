<?php
interface Narudzbina {
    public function izracunaj(): float;
}

abstract class Proizvod {
    protected string $naziv;
    protected float $osnovnaCena;

    public function __construct(string $naziv, float $osnovnaCena) {
        $this->naziv = $naziv;
        $this->osnovnaCena = $osnovnaCena;
    }
}

class Hrana extends Proizvod implements Narudzbina {
    private const float POPUST = 0.10;

    public function __construct(string $naziv, float $osnovnaCena) {
        parent::__construct($naziv, $osnovnaCena);
    }

    public function izracunaj(): float {
        return $this->osnovnaCena * (1 - self::POPUST);
    }

    public function __toString(): string {
        return "Hrana: {$this->naziv}, Cena sa popustom: " . $this->izracunaj() . "e";
    }
}

$piletina = new Hrana("Piletina ispod sača", 12.00);
echo $piletina;
?>
