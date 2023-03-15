<?php
    class Salle {
        private  $num_salle;
        private  $lib_salle;
        private  $etage;

        function __construct(string $num='', string $libelle='', string $etage='') {
            $this->num_salle = $num;
            $this->lib_salle = $libelle;
            $this->etage = $etage;
        }

        function setNumSalle( $num): void {
            if($num === null) {
                $this->num_salle = '';
            }
            $this->num_salle = $num;
        }

        function getNumSalle() {
            return $this->num_salle;
        }

        function setLibSalle( $libelle): void {
            if($libelle === null) {
                $this->lib_salle  = '';
            }
            $this->lib_salle = $libelle;
        }
        
        function getLibSalle() {
            return $this->lib_salle;
        }
        
        function setEtage( $etage): void {
            if($etage === null) {
                $this->etage = '';
            }
            $this->etage = $etage;
        }
        
        function getEtage() {
            return $this->etage;
        }
    }
?>