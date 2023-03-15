<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style/style.css">
    <title>Liste des salles</title>
</head>
<body>
    <section>
        <label></label>
        <h1>Liste des Salles</h1>
    </section>
    <section>
        <label></label>
        <table border="1" class="table_salle"></table>
        <tr>
            <th>Numéro</th>
            <th>Désignation</th>
            <th>Étage</th>
            <th>Equipements</th>
        </tr>
        <?php
            foreach($lignes as $ligne) {
                echo $ligne; // tableau de lignes à créer dans /controleur/salles.php
            }
        ?>
        <tr>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td colspan="7" style="text-align: right"><a href="editSalle.php?op=a" class="ajout">Ajouter une salle</a></td>
        </tr>
        </table>
    </section>
</body>
</html>