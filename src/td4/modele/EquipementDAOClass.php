<?php
    require("Connexion.php");
    require("EquipementClass.php"); 
    class EquipementDAO {
        private Connexion $bd;
        private string $select;

        function __construct() {
            $this->bd = new Connexion("mysql", "db2", "bddSalle");
            $this->select = "SELECT * FROM `TYPE_EQUIPT`";
        }

        function insert (Equipement $equipement) : void {
            $this->bd->execSQL("INSERT INTO TYPE_EQUIPT (id_equipt, lib_equipt, commentaire)
            VALUES (:idequip, :libequip, :comm)"
            ,[':idequip'=>$equipement->getIdEquipt(), ':libequip'=>$equipement->getLibEquipt(),':comm'=>$equipement->getCommentaire() ] );
        }

        function delete (string $id) : void {
            $this->bd->execSQL("DELETE FROM TYPE_EQUIPT WHERE id_equipt = :idequip",[':idequip'=>$id]);
        }

        function update (Equipement $equipement) : void {
            $this->bd->execSQL("UPDATE TYPE_EQUIPT SET lib_equipt = :libequip, commentaire = :comm WHERE id_equipt = :idequip",[':libequip'=>$equipement->getLibEquipt(), ':comm'=>$equipement->getCommentaire(), ':idequip'=>$equipement->getIdEquipt()]);
        }

        private function loadQuery (array $result) : array {
            $equip = [];
            foreach($result as $row) {
            $equip = new Equipement();
            $equip->setIdEquipt($row['id_equipt']);
            $equip->setLibEquipt($row['lib_equipt']);
            $equip->setCommentaire($row['commentaire']);
            $equips[] = $equip;
            }
            return $equips;
        }

        function getAll () : array {
            return ($this->loadQuery($this->bd->execSQL($this->select)));
        }

        function getById (string $id) : Equipement {
            $unEquip = new Equipement();
            $lesEquips = $this->loadQuery($this->bd->execSQL($this->select ." WHERE
            id_equipt=:id", [':id'=>$id]) );
            if (count($lesEquips)>0) { $unEquip = $lesEquips[0]; }
            // il y a un seul élément dans le tableau de salles ➔ indice 0
            return $unEquip;
        }

        function existe (string $id) : bool {
            $req = "SELECT * FROM SALLE WHERE id_equipt = :id";
            $res = ($this->loadQuery($this->bd->execSQL($req,[':id'=>$id])));
            return ($res != []); // si tableau de salles est vide alors la salle n’existe pas
        }

        function getNonInventaire(string $numSalle): array {
            $unEquip = [];
            $result = $this->loadQuery($this->bd->execSQL($this->select." WHERE lib_equipt!= :numSalle", [':numSalle'=>$numSalle]));
            foreach($result as $row) {
                $unEquip[$row['id_equipt']] = new Equipement();
                $unEquip[$row['id_equipt']]->setIdEquipt($row['id_equipt']);
                $unEquip[$row['id_equipt']]->setLibEquipt($row['lib_equipt']);
                $unEquip[$row['id_equipt']]->setCommentaire($row['commentaire']);
            }
            return $unEquip;
        }
    }
?>