<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaires.css">
    <title>Formulaire</title>
</head>
<body>
    <section>
        <h1>Formulaire de saisie</h1>
        <form method="post" action="formulaire.php">
            <fieldset>
                <legend>Saisie de données personnelles</legend>
                <label for="nom">NOM : </label>
                <input type="text" name="nom" placeholder="Entrez votre nom" value="<?= $nom ?>">
                <br> <br>
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" placeholder="Entrez votre prénom" value="<?= $prenom ?>">
                <br> <br>
                <label for="age">Âge : </label>
                <input type="number" name="age" placeholder="Entrez votre âge" value="<?= $age ?>">
                <br> <br>
                <label for="sexe">Genre :</label>
                <?php
                    echo "<input type=\"radio\" name=\"sexe\" id=\"sexe\" value=\"féminin\"";
                    if($sexe == "féminin") {
                        echo "checked='checked'";
                    }
                    echo ">Féminin</input>";
                    echo "<input type=\"radio\" name=\"sexe\" id=\"sexe\" value=\"masculin\"";
                    if($sexe == "masculin") {
                        echo "checked='checked'";
                    }
                    echo ">Masculin</input>";
                    echo "<input type=\"radio\" name=\"sexe\" id=\"sexe\" value=\"autre\"";
                    if($sexe == "autre") {
                        echo "checked='checked'";
                    }
                    echo ">Autre</input>";
                ?>
            </fieldset>
                <fieldset>
                <legend>Compétences dans les langages informatiques</legend>
                    <?php
                        foreach($langages as $langue) {
                            echo "<input type=\"checkbox\" name=\"langages[$langue]\" id=\"langues_info\" value=\"$langue\"";
                            foreach($langues_info as $langueyolo) {
                                if($langueyolo === $langue) {
                                    echo "checked";
                                }
                            }
                            echo ">$langue";
                        }
                    ?>

                </fieldset>
            <fieldset>
                <legend>Langue maternelle</legend>
                <select name="langues_mat">
                    <?php
                        foreach($lesLangues as $langue) {
                            echo "<option value=\"$langue\">$langue</option>";
                        }
                    ?>
                </select>
            </fieldset>
            <input type="submit" value="Validez" name="valider">
            <input type="reset" value="Annulez" name="resetPHP">
        </form>
    </section>
</body>
</html>