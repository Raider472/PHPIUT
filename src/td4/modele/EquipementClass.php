<?php
    class Equipement {
        private int $id_equipt;
        private string $lib_equipt;
        private string $commentaire;

        function __construct($id_equipt='', $lib_equipt='', $commentaire='') {
            $this->id_equipt = $id_equipt;
            $this->lib_equipt = $lib_equipt;
            $this->commentaire = $commentaire;
        }

        function getIdEquipt() {
            return $this->id_equipt;
        }
        
        function getLibEquipt() {
            return $this->lib_equipt;
        }
        
        function getCommentaire() {
            return $this->commentaire;
        }

        function setIdEquipt($id_equipt) {
            $this->id_equipt = $id_equipt;
        }

        function setLibEquipt($lib_equipt) {
            $this->lib_equipt = $lib_equipt;
        }
        
        function setCommentaire($commentaire) {
            $this->commentaire = $commentaire;
        }
    }
?>