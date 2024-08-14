<?php

class Mensch {
    public string $vorname;
    public string $nachname;
    public \DateTime $geburtsdatum;

    public function __construct(string $vorname, string $nachname, string $geburtsdatum) {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geburtsdatum = new \DateTime($geburtsdatum);
    }

    function setVorname(string $vorname) {
        $this->vorname = $vorname;
    }

    function setNachname(string $nachname) {
        $this->nachname = $nachname;
    }

    function setGeburtsdatum(string $geburtsdatum) {
        $this->geburtsdatum = new \DateTime($geburtsdatum);
    }

    function getVorname(): string {
        return $this->vorname;
    }

    function getNachname(): string {
        return $this->nachname;
    }

    function getGeburtsdatum(): \DateTime {
        return $this->geburtsdatum;
    }
}
?>
