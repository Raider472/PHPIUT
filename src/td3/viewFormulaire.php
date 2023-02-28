<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="formulaire.css">
        <title>Document</title>
    </head>
    <body>
        <section>
            <h1>Formulaire de saisie</h1>
            <form method="POST">
                <fieldset>
                    <legend>Saisie des données personelles</legend>
                    <label for="text_nom">NOM</label>
                    <input type="text" name="text_nom" value='<?= $nom ?>'>
                    <br>
                    <br>
                    <label for="text_prenom">Prenom</label>
                    <input type="text" name="text_prenom" value='<?= $prenom ?>'>
                    <br>
                    <br>
                    <label for="text_age">Age</label>
                    <input type="text" name="text_age" value='<?= $age ?>'>
                    <br>
                    <br>
                    <label for="radion_genre">Genre</label>
                    <input type="radio" name="genre[homme]"> Homme
                    <input type="radio" name="genre[femme]"> Femme
                    <input type="radio" name="genre[neutre]"> Neutre
                </form>
            </fieldset>
        </section>
    </body>
</html>