<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
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
                <input type="text" name="age" placeholder="Entrez votre âge" value="<?= $age ?>">
                <br> <br>
                <label for="sexe">Genre :</label>
                <input type="radio" name="Féminin" id="sexe" value="connard">Féminin</input>
                <input type="radio" name="Masculin" id="sexe">Masculin</input>
                <input type="radio" name="Autres" id="sexe">Autres</input>
            </fieldset>
                        <fieldset>
                <legend>Compétences dans les langages informatiques</legend>
                <label for="langues_info"></label>
                <input type="checkbox" name="C" id="langues_info">C</input>
                <input type="checkbox" name="Java" id="langues_info">Java</input>
                <input type="checkbox" name="TypeScript" id="langues_info">TypeScript</input>
                <input type="checkbox" name="PHP" id="langues_info">PHP</input>
                <input type="checkbox" name="C++" id="langues_info">C++</input>
                <input type="checkbox" name="Cobol" id="langues_info">Cobol</input>
                <input type="checkbox" name="Aucun" id="langues_info">Aucun</input>
            </fieldset>
            <fieldset>
                <legend>Langue maternelle</legend>
                <select name="langues_mat">
                    <option>Anglais</option>
                    <option>Français</option>
                    <option>Allemand</option>
                    <option>Espagnol</option>
                    <option>Italien</option>
                    <option>Portugais</option>
                    <option>Néerlandais</option>
                </select>
            </fieldset>
            <input type="submit" value="Validez">
            <input type="reset" value="Annulez">
        </form>
    </section>
</body>
</html>