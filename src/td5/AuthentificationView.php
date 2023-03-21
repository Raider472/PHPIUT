<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Authentication</h1>
    <form>
    <input type="text" name="login" value = "<?= $identifiants['login'] ?>">
    <input type="password" name="motDePasse" value = "<?= $identifiants['motDePasse'] ?>">
    <input type="submit" name="Connexion" value="Connexion">
    <?= $message ?>
    </form>
</body>
</html>