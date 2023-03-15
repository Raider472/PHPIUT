<?php
    require "EquipementClass.php"; 
    class EquipsParSalle {
        private string $num_salle;
        private Equipement $equipement;
        private int $qte;

        function __construct($equipementNum="", $equipementlib="", $equipementComm="", $num_salle="", $qte=0) {
            $this->num_salle = $num_salle;
            $this->equipement = new Equipement($equipementNum,$equipementlib,$equipementComm);
            $this->qte = $qte;
        }

        function setNumSalle($num_salle) {
            if ($num_salle === null) {
                $this->num_salle = "";
            }
            $this->num_salle = $num_salle;
        }
        function getNumSalle(): string {
            return $this->num_salle;
        }
        function setEquipement(Equipement $equipement) {
            $this->equipement = $equipement;
        }
        function getEquipement(): Equipement {
            return $this->equipement;
        }
        function setQte($qte) {
            if ($qte === null) {
                $this->qte = 0;
            }
            $this->qte = $qte;
        }
        function getQte(): int {
            return $this->qte;
        }
    }
?>