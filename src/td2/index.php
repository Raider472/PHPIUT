<!DOCTYPE html>
    <html>
        <head>
            <title>td2</title>
            <meta charset="utf8" />
        </head>
    <body>
        <?php
            require_once("classes/personne.php");
            $objetc = new Personne("Jean", "ValJean", "h", 58);
            echo $objetc;
            echo "<br>", $objetc->getNom(), "</br>";
            echo "<br>test TD2</br>";
            $object2 = new Personne("Yewa", "Gaming", "8", 10);
            echo $object2;
            echo "<br>", $object2->getNom(), "</br>";
        ?>
        <?php
            require_once("classes/Etudiant.php");
            $tab = array(10,20,10);
            $objetc = new Etudiant("NAE", "Gabriel", "h", 22, $tab);
            $objetc->addNote(20);
            echo $objetc;
            $etudTest = new Etudiant("Jean", "Yewa", "f", 25, []);
            echo "<br>". $etudTest;
        ?>
        <?php
            require_once("classes/Promotion.php");
            $tab = array(10,20,10);
            $objetc = new Etudiant("NAE", "Gabriel", "h", 22, $tab);
            $objetc->addNote(20);
            $etudTest = new Etudiant("Jean", "Yewa", "f", 25, []);
            $promo = new Promotion("IUT Passerelle");
            $promo->addEtudiant($objetc);
            $promo->addEtudiant($etudTest);
            echo "<br>" . $promo;
        ?>
    </body>
</html>
