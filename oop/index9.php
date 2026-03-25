<?php
class Event {
    public function __construct(
        public string $naslov,
        public string $lokacija
    ) {}

    public function __toString(): string {
        return "Event: {$this->naslov} se održava na lokaciji {$this->lokacija}.";
    }
}

$e = new Event("Sophia Nexus Retreat", "Etno selo Brezna");
echo $e;
?>
