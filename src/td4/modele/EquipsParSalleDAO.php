<?php
    require("Connexion.php");
    require("EquipsParSalle.php");

    class EquipsParSalleDAO {
        private Connexion $bd;
        private string $select;

        function __construct() {
            $this->bd = new Connexion("mysql", "db2", "bddSalle");
            $this->select = "SELECT * FROM `CONTIENT`";
        }

        function insert(EquipsParSalle $equiptBySalle): void {
            $this->bd->execSQL("INSERT INTO SALLE (num_salle, id_equipt, qte)
            VALUES (:num, :id, :quant)"
            ,[':num'=>$equiptBySalle->getNumSalle(), ':id'=>$equiptBySalle->getEquipement()->getIdEquipt(),':quant'=>$equiptBySalle->getQte() ] );
        }

        function deleteByNumSalleByIdEquipt(string $numSalle, string $idEquipt): void {
            $this->bd->execSQL("DELETE FROM SALLE WHERE num_salle=:num AND id_equipt=:id",[':num'=>$numSalle, ':id'=>$idEquipt]);
        }

        function deleteByNumSalle(string $numSalle): void {
            $this->bd->execSQL("DELETE FROM SALLE WHERE num_salle=:num",[':num'=>$numSalle]);
        }

        function update(EquipsParSalle $equiptBySalle): void {
            $this->bd->execSQL("UPDATE SALLE SET num_salle=:num WHERE id_equipt=:id",[':num'=>$equiptBySalle->getNumSalle(), ':id'=>$equiptBySalle->getEquipement()->getIdEquipt()]);
        }

        function loadQuery(array $result): array {
            $equipementDAO = new EquipementDAO();
            $lesEquiptBySalle = [];
            foreach($result as $row) {
            $equipement = $equipementDAO->getById($row['id_equipt']);
            $lesEquiptBySalle[]= new EquipsParSalle($row['num_salle'], $equipement, $row['qte']);
            }
            return $lesEquiptBySalle;
        }

        function getAll(): array {
            return ($this->loadQuery($this->bd->execSQL($this->select)));
        }

        function getByNumSalle(string $numSalle): array {
            return ($this->loadQuery($this->bd->execSQL("SELECT * FROM SALLE WHERE num_salle=:num",[':num'=>$numSalle])));
        }

        function getByNumSalleByIdEquipt(string $numSalle, string $idEquipt): array {
            return ($this->loadQuery($this->bd->execSQL("SELECT * FROM SALLE WHERE num_salle=:num AND id_equipt=:id",[':num'=>$numSalle, ':id'=>$idEquipt])));
        }

        function existe (string $numSalle, string $idEquipt) : bool {
            $req = "SELECT * FROM CONTIENT WHERE num_salle = :num AND id_equipt = :id";
            $res = ($this->loadQuery($this->bd->execSQL($req,[':num'=>$numSalle, ':id'=>$idEquipt])));
            return ($res != []); // si tableau de salles est vide alors la salle n’existe pas
        }
    }
?>