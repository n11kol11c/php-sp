<?php
class Ulaznica {
    public function __construct(
        public string $serijskiBroj,
        public string $tip
    ) {}

    public function __clone() {
        $this->serijskiBroj .= "-KOPIJA";
    }
}

$u1 = new Ulaznica("SN-2026-001", "VIP");
$u2 = clone $u1;

echo $u1->serijskiBroj;
echo $u2->serijskiBroj;
?>
