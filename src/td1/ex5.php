<!DOCTYPE html>
    <html>
        <head>
            <title>Bonjour</title>
            <meta charset="utf8" />
        </head>
    <body>
        <?php
            $entier = [1, 2, 3 ,4 ,5 ,6 ,7 ,8 ,9 ,10];
            $liste = "";
            for ($i=0; $i<count($entier); $i++) {
                $liste .= " ";
                $liste .= (string)$entier[$i];
            }
            echo "<p>", $liste, "</p>"
        ?>
        <?php
            $entier2 = [];
            for ($i = 0; $i <= 50; $i++) {
                array_push($entier2, $i);
            }
            $liste = "";
            for ($i=0; $i<=50; $i++) {
                $liste .= " ";
                $liste .= (string)$i;
                if ($i % 10 === 0 && $i != 0) {
                    $liste .= "<br>";
                }
            }
            echo "<p>", $liste, "</p>";
        ?>
        <?php
            $personnage = [
                "id_pers" => 1,
                "nom" => "Skywalker",
                "prenom" => "Luke",
            ];
            $tableauPersonnage = [$personnage];
            $tableauPersonnage[] = [2, "Solo", "Han"];
            $tableauPersonnage[] = [3, "Organa", "Leia"];
            var_dump($tableauPersonnage);
            echo "<table>","<thead>","<tr>","<th>","id_pers","</th>","<th>","nom","</th>","<th>","prenom","</th>","</tr>","</thead>";
            echo "<tbody>";
            function affichageTableau(array $tab): void {
                for ($i=0; $i<count($tab); $i++) {
                    echo "<tr>";
                    foreach($tab[$i] as $cle=>$valeur) {
                        echo "<td>", $cle, " ", $valeur ,"</td>";
                    } 
                    echo "</tr>";
                }
            }
            affichageTableau($tableauPersonnage);
            echo "</tbody>";
            echo "</table>";
        ?>
    </body>
</html>