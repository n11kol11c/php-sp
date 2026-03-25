<?php
class Rezervacija {
    public function __construct(
        public readonly int $id,
        public readonly string $datum
    ) {}
}

$rez = new Rezervacija(101, "2026-05-21");
echo $rez->id; 
?>
