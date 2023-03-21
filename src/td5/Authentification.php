<?php
    session_start();
    $identifiants['login'] = (isset($_GET['login'])?$_GET['login']:"");
    $identifiants['motDePasse'] = (isset($_GET['motDePasse'])?$_GET['motDePasse']:"");

    if (existeUtilisateur($identifiants) === true) {
        $_SESSION['nom'] = $identifiants['login'];
        $message = "Identification OK : login " .  $identifiants['login'] . ", mdp " . $identifiants['motDePasse'];
        header("location: Acceuil.php");
    }
    else {
        $message =  "Identification incorrecte. Essayez de nouveau.";
    }

    include 'AuthentificationView.php';

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    $fichierJson = file_get_contents("identifiants.json");
    $jsonData = json_decode($fichierJson, true);
    print_r($jsonData);

    function existeUtilisateur(array $identifiants): bool {
        //$fichierJson = fread(fopen("identifiants.json", "r"), filesize("identifiants.json"));
        $fichierJson = file_get_contents("identifiants.json");
        $jsonData = json_decode($fichierJson, true);
        if ($identifiants["login"] === $jsonData[0]["login"] && $identifiants["motDePasse"] === $jsonData[0]["mdp"] || $identifiants["login"] === $jsonData[1]["login"] && $identifiants["motDePasse"] === $jsonData[1]["mdp"]) {
            return true;
        }
        return false;
    }
?>