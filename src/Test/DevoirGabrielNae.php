<?php
    //Je n'ai pas eu le temps de mettres les exercices en format tableau HTML

    //Ex 1 Suite
    function suite(int $parametre): void {
        $u0 = 0;
        $u1 = 1;
        for ($i = 0; $i < $parametre; $i++) {
            echo 3*$i-$u1 + $i-$u0 . "<br>";
            $u1 = $i - 1;
            $u0 = $i - 2;
        }
    }

    //Ex2 CompteMots
    function compteMots(string $phrase): void {
        $tabMot = explode(" ",$phrase);
        $tab = [];
        for ($i = 0, $j = 0, $compteur = 0; $i < count($tabMot); $j++) {
            if($tabMot[$i] === $tabMot[$j]) {
                $compteur++;
            }
            if ($j === count($tabMot)-1) {
                $tab = array (
                    $tabMot[$i]=>$compteur
                );
                foreach($tab as $tabFor) {
                    echo $tabMot[$i] . " " . $tabFor . "<br>";
                };
                $i++;
                $j = -1;
                $compteur = 0;
            }
        }
    }

    //Ex3 Classes
    // Delit
    class Delit {
        private string $code;
        private string $désignation;
        private int $tarif;

        function __construct(string $code, string $désignation, int $tarif)
        {
            $this->code = $code;
            $this->désignation = $désignation;
            $this->tarif = $tarif;
        }

        function setCode(string $code): void {
            $this->code = $code;
        }

        function setDesignation(string $désignation): void {
            $this->désignation = $désignation;
        }

        function setTarif(string $tarif): void {
            $this->tarif = $tarif;
        }

        function getCode(): string {
            return $this->code;
        }

        function getDesignation(): string {
            return $this->désignation;
        }

        function getTarif(): int {
            return $this->tarif;
        }

        function __toString() : string
        {
            return $this->getCode() . " - " . $this->getDesignation() . " - " . $this->getTarif() . " €";;    
        }
    }

    //Vehicule
    class Vehicule {
        private string $plaqueImmatriculation;
        private string $marque;
        private string $modèle;

        function __construct(string $plaqueImmatriculation, string $marque, string $modèle)
        {
            $this->plaqueImmatriculation = $plaqueImmatriculation;
            $this->marque = $marque;
            $this->modèle = $modèle;
        }

        function setPlaque($plaqueImmatriculation): void {
            $this->plaqueImmatriculation = $plaqueImmatriculation;
        }

        function setMarque($marque): void {
            $this->marque = $marque;
        }

        function setModele($modèle): void {
            $this->modèle = $modèle;
        }

        function getPlaque(): string {
            return $this->plaqueImmatriculation;
        }

        function getMarque(): string {
            return $this->marque;
        }

        function getModele(): string {
            return $this->modèle;
        }

        function __toString() : string
        {
            return $this->getPlaque() . " - " . $this->getMarque() . " " . $this->getModele();            
        }
    }

    //Infraction
    class Infraction {
        private int $numero;
        private Vehicule $vehiculeResponsable;
        private array $lesDelits;

        function __construct(int $numero, Vehicule $vehiculeResponsable)
        {
            $this->numero = $numero;
            $this->vehiculeResponsable = $vehiculeResponsable;
            $this->lesDelits = [];
        }

        function setNumero($numero): void {
            $this->numero = $numero;
        }

        function setVehicule($vehiculeResponsable): void {
            $this->vehiculeResponsable = $vehiculeResponsable;
        }

        function getNumero(): int {
            return $this->numero;
        }

        function getVehicule(): Vehicule {
            return $this->vehiculeResponsable;
        }

        function getDelit(): array {
            return $this->lesDelits;
        }

        function addDelit(string $code, string $désignation, int $tarif): void {
            $this->lesDelits[] = new Delit($code, $désignation, $tarif);
        }

        function getDelits(): void {
            foreach($this->lesDelits as $lesDelits) {
                echo $lesDelits->getCode() . " " . $lesDelits->getDesignation() . " " . $lesDelits->getTarif() . " €" . "<br>";
            }
        }

        function getMt(): int {
            $montant = 0;
            for($i = 0; $i < count($this->lesDelits); $i++) {
                $montant = $montant + $this->lesDelits[$i]->getTarif();
            }
            return $montant;
        }

        function affiche(): void {
            echo "Infraction n°" . $this->getNumero() . " " . $this->getMT() . " €" . "<br>";
            echo  "véhicule: " . $this->vehiculeResponsable . "<br>";
            echo $this->getDelits();
        }
    }
?>