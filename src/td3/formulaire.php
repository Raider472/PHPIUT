<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $langages = ["C", "Java", "TypeScript", "PHP", "C++", "Cobol", "Aucun"];
    $lesLangues = ["Anglais", "Français", "Allemand", "Espagnol", "Italien", "Portugais", "Néerlandais"];

    $nom = (isset($_POST['nom'])?$_POST['nom']:"null");
    $prenom = (isset($_POST['prenom'])?$_POST['prenom']:"null");
    $age = (isset($_POST['age'])?$_POST['age']:"null");
    $sexe = (isset($_POST['sexe'])?$_POST['sexe']:"null");
    $langues_info = (isset($_POST['langages'])?$_POST['langages']:["Aucun"]);
    $langues_mat = (isset($_POST['langues_mat'])?$_POST['langues_mat']:"null");

    include 'viewFormulaire.php';

    if ($nom != null && $prenom != null && $age != null) {
        echo '<p> Bonjour '.$nom.' '.$prenom.', '.' vous avez ' . "$age " . "ans.</p>";
    }
    if($sexe === "masculin") {
        echo "<p> Vous êtes un homme.</p>";
    }
    else if($sexe === "féminin") {
        echo "<p> Vous êtes une femme.</p>";
    }
    else {
        echo "<p> Vous êtes rien.</p>";
    }
    echo "<p> Vous connaissez les langages suivants: ";
    foreach ($langues_info as $lang) {
        echo " $lang, ";
    }
    echo "</p>";
    echo "<p> Vous connaissez les langues suivants: " . "$langues_mat </p>";
?>