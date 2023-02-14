<?php
    class Promotion {
        private string $libelle;
        private $etudiant = [];

        function __construct(string $libelium) {
            $this->libelle = $libelium;
        }

        function __toString(): string {
            $LesEtudiants = "";
            foreach($this->etudiant as $unEtudiant) {
                $LesEtudiants .= $unEtudiant->getEtudiantString();
                $LesEtudiants .= "<br>";
            }
            return $this->getLibelle() . "<br>" . $LesEtudiants . "<br>" . "Moyenne de la promotion : " . $this->getMoyenneTotal();
        }

        function getLibelle(): string {
            return $this->libelle;
        }

        function getEtudiants(): array {
            return $this->etudiant;
        }

        function addEtudiant(Etudiant $etudiant): void {
            array_push($this->etudiant, $etudiant);
        }

        function addNewEtudiant(string $nom, string $prenom, string $sexe, int $age, array $notes): void {
            $object = new Etudian($nom, $prenom, $sexe, $age, $notes);
            array_push($this->etudiant, $object);
        }

        private function getNombreEtudiant(): float {
            return count($this->etudiant);
        }

        function getMoyenneTotal(): float {
            $nbEtudTotal = $this->getNombreEtudiant();
            $moyenneTotal = 0;
            foreach($this->etudiant as $unEtudiant) {
                $moyenneTotal += $unEtudiant->getMoyenne();
            }
            return $moyenneTotal / $nbEtudTotal;
        }
    }
?>