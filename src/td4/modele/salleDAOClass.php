<?php
    require("Connexion.php");
    require("SalleClass.php");
    class SalleDAO {
        private Connexion $bd;
        private string $select;
        
        function __construct() {
            $this->bd = new Connexion("mysql", "db2", "bddSalle");
            $this->select = "SELECT * FROM `SALLE`";
        }

        function insert (Salle $salle) : void {
            $this->bd->execSQL("INSERT INTO SALLE (num_salle, lib_salle, etage)
            VALUES (:num, :libelle, :etage)"
            ,[':num'=>$salle->getNumSalle(), ':libelle'=>$salle->getLibSalle(),':etage'=>$salle->getEtage() ] );
        }

        function delete (string $num) : void {
            $this->bd->execSQL("DELETE FROM SALLE WHERE num_salle = \"E99\";");
        }

        function update (Salle $salle) : void {
            $this->bd->execSQL("UPDATE SALLE SET lib_salle = :libele, etage = :etage WHERE num_salle = :num;",[':num'=>$salle->getNumSalle(), ':libelle'=>$salle->getLibSalle(), ':etage'=>$salle->getEtage()]);
        }

        private function loadQuery (array $result) : array {
            $salles = [];
            foreach($result as $row) {
            $salle = new Salle();
            $salle->setNumSalle($row['num_salle']);
            $salle->setLibSalle($row['lib_salle']);
            $salle->setEtage($row['etage']);
            $salles[] = $salle;
            }
            return $salles;
        }

        function getAll () : array {
            return ($this->loadQuery($this->bd->execSQL($this->select)));
        }

        function getByNum (string $num) : Salle {
            $uneSalle = new Salle();
            $lesSalles = $this->loadQuery($this->bd->execSQL($this->select ." WHERE
            num_salle=:num", [':num'=>$num]) );
            if (count($lesSalles)>0) { $uneSalle = $lesSalles[0]; }
            // il y a un seul élément dans le tableau de salles ➔ indice 0
            return $uneSalle;
        }

        function existe (string $num) : bool {
            $req = "SELECT * FROM SALLE WHERE num_salle = :num";
            $res = ($this->loadQuery($this->bd->execSQL($req,[':num'=>$num])));
            return ($res != []); // si tableau de salles est vide alors la salle n’existe pas
        }

        function getTotalNbEquipt(string $numSalle) : int {
            // renvoie la quantité totale d’équipements d’une salle si salle présente dans CONTIENT
            $res = $this->bd->execSQL("SELECT SUM(qte) as total FROM CONTIENT
            WHERE num_salle=:numSalle", [':numSalle'=>$numSalle]);
            return (isset($res[0]['total']))?$res[0]['total']:0;
        }
    }
?>