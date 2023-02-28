<!DOCTYPE html>
    <html>
        <head>
            <title>td2</title>
            <meta charset="utf8" />
        </head>
    <body>
        fdgtrkzzsgfgdsfhsduzas
        <p>
            <?php
                require ("DevoirGabrielNae.php");
                suite(6);
                echo "<br>";
                compteMots("Un exemple de phrase comportant un ensemble de mots");
                echo "<br>";
                $PV = new Delit("GTE", "Délit de vitesse", 1000);
                echo "$PV" . "<br>";
                $PV->setTarif(48945631513);
                echo "$PV" . "<br>";
                $voiture = new Vehicule("46456EHUZ", "Renualt", "Captu");
                $voiture->setModele("Captur");
                echo $voiture . "<br>";
                $lesDelits = new Infraction(45, $voiture);
                $lesDelits->addDelit("GTE", "Délit de vitesse", 1000);
                $lesDelits->addDelit("CI", "Conduite Ivre", 2168);
                echo $lesDelits->getDelits(). "<br>";
                echo $lesDelits->getMt(). "<br>";
                $lesDelits->affiche();
            ?>
        </p>
    </body>
</html>