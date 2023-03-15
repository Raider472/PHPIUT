<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <p>test</p>
    <?php
        require "../modele/Connexion.php";
        $dbConnect = new Connexion("mysql", "db2", "bddSalle"); 
        $requete = "SELECT * FROM SALLE";
        $res = $dbConnect->execSQL($requete);
        foreach($res as $lesresultats) {
            echo $lesresultats["num_salle"] . "<br>";
        }
    ?>
</body>
</html>