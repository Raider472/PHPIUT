<?php
    class Personne {
        private string $prenom;
        private string $nom;
        private string $sexe;
        private int $age;

        function __construct( string $nom, string $prenom, string $sexe, int $age) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->age = $age;
        }

        function __toString(): string {
            $chaine = strtoupper($this->nom) . " " . $this->prenom . ", " . $this->age . " an";
            if ($this->age > 1) {
                $chaine .= "s, ";
            }
            if (strtoupper($this->sexe) === "H") {
                $chaine .= " Homme";
            }
            else if (strtoupper($this->sexe) === "F") {
                $chaine .= " Femme";
            }
            else {
                $chaine .= " Inconnu(e)";
            }
            return $chaine;
        }

        function getNom(): string {
            return strtoupper($this->nom);
        }

        function getPrenom(): string {
            return $this->prenom;
        }

        function getAge(): string {
            return $this->age;
        }

        function getSexe(): string {
            return $this->sexe;
        }

        function setNom(string $nom) {
            $this->nom = $nom;
        }

        function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }

        function setSexe(string $sexe) {
            $this->sexe = $sexe;
        }

        function setAge(string $age) {
            $this->age = $age;
        }
    }
?>