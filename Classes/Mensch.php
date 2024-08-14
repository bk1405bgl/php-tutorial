<?php

    class Mensch {
        public string $vorname;
        public string $nachname;
        public \DateTime $geburtsdatum;

        function setVorname($vorname) {
            $this->vorname = $vorname;
        }
        function setNachname($nachname) {
            $this->nachname = $nachname;
        }
        function setGeburtsdatum($geburtsdatum) {
            $this->geburtsdatum = new \DateTime($geburtsdatum);
        }
    }

?>