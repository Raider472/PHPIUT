<?php
    class Etudiant extends Personne {
        private $note = [];
        
        function __construct( string $nom, string $prenom, string $sexe, int $age ,array $notes) {
            $this->note = $notes;
            parent::__construct($nom, $prenom, $sexe, $age);
        }

        function __toString(): string {
            $lesNotes = "";
            if (count($this->note) === 0) {
                foreach ($this->note as $uneNote) {
                    $lesNotes .= $uneNote . ", ";
                }
                return $this->getEtudiantString();
            }
            else {
                foreach ($this->note as $uneNote) {
                    $lesNotes .= $uneNote . ", ";
                }
                return $this->afficherNote() . "<br>" . $this->getEtudiantString();
            }
        }

        function getEtudiantString(): string {
            return parent::__toString(). ", " . "moyenne: " . $this->getMoyenne();
        }

        function addNote(float $note): void {
            $this->note[] = $note;
        }

        function afficherNote(): string {
            $note = "Les notes de " . $this->getNom() . " " . $this->getPrenom() . " : ";
            for ($i=0; $i<count($this->note); $i++) {
                $note .= (string)$this->note[$i];
                if ($i != count($this->note)-1) {
                    $note .= ", ";
                }
            }
            return $note;
        }

        function getMoyenne(): float {
            $nbNotes = count($this->note);
            $moyenne = 0;
            if ($nbNotes === 0) {
                return $moyenne;
            }
            else {
                for($i=0; $i<count($this->note); $i++) {
                    $moyenne += $this->note[$i];
                }
                return $moyenne / $nbNotes;
            }
        }
    }
?>