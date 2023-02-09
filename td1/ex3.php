<!DOCTYPE html>
    <html>
        <head>
            <title>Bonjour</title>
            <meta charset="utf8" />
        </head>
    <body>
        <?php
        $personne = array(
            array("Bougdira", "Mme", "jaune"),
            array("Ginoux", "Mr.", "bleu")
        );
        if ($personne[0][2] === "jaune" || $personne[0][2] === "orange" || $personne[0][2] === "rouge") {
            echo "<p>", "Bonjour ". $personne[0][1]. " ". $personne[0][0]. ", vous aimez les couleurs chaudes (". $personne[0][2]. ").". "</p>";
        }
        else {
            echo "<p>", "Bonjour ". $personne[0][1]. " ". $personne[0][0]. ", vous aimez les couleurs froides (". $personne[1][2]. ").". "</p>";
        }
        if ($personne[1][2] === "jaune" || $personne[1][2] === "orange" || $personne[1][2] === "rouge") {
            echo "<p>", "Bonjour ". $personne[1][1]. " ". $personne[1][0]. ", vous aimez les couleurs chaudes (". $personne[1][2]. ").". "</p>";
        }
        else {
            echo "<p>", "Bonjour ". $personne[1][1]. " ". $personne[1][0]. ", vous aimez les couleurs froides (". $personne[1][2]. ").". "</p>";
        }
        ?>
    </body>
</html>