<?php
abstract class Clan {
    protected string $ime;

    public function __construct(string $ime) {
        $this->ime = $ime;
    }

    abstract public function predstaviSe(): void;
}

class Administrator extends Clan {
    public function predstaviSe(): void {
        echo "Ja sam admin i moje ime je: " . $this->ime;
    }
}

$admin = new Administrator("Marko");
$admin->predstaviSe();

?>
