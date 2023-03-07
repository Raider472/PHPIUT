<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $nom = (isset($_POST['nom'])?$_POST['nom']:null);
    $prenom = (isset($_POST['prenom'])?$_POST['prenom']:null);
    $age = (isset($_POST['age'])?$_POST['age']:null);
    $sexe = (isset($_POST['sexe'])?$_POST['sexe']:null);
    $langues_info = (isset($_POST['langues_info'])?$_POST['langues_info']:null);
    $langues_mat = (isset($_POST['langues_mat'])?$_POST['langues_mat']:null);

    include 'viewFormulaire.php';

    if ($nom != null && $prenom != null && $age != null) {
        echo '<p> Bonjour '.$nom.' '.$prenom.', '.'vous avez '.$age.'.</p>';
    }
?>