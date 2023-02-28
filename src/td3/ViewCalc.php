<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="calculatrice.css">
        <title>Document</title>
    </head>
    <body>
        <section>
        <h1>Calculatrice</h1>
            <form method="get">
                <h2>Entrer deux entiers</h2>
                <label for="text_valeur1">Valeur 1</label>
                <input type="text" name="text_valeur1" value='<?= $entier1 ?>'>
                <br>
                <br>
                <label for="text_valeur2">Valeur 2</label>
                <input type="text" name="text_valeur2" value='<?= $entier2 ?>'>
                <h2>Faite votre opération</h2>
                <input type="submit" name="addition_sub" value="Addition">
                <br>
                <br>
                <input type="submit" name="mult_sub" value="Multiplication">
                <br>
                <br>
                <input type="submit" name="soustra_sub" value="Soustraction">
                <br>
                <br>
                <input type="submit" name="division_sub" value="Division">
            </form>
        </section>
    </body>
</html>