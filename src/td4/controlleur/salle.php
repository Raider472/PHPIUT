<?php
    require("../modele/salleDAOClass.php");
    $classSale = new SalleDAO();
    $lignes = [];
    $lesSalles = $classSale->getAll();
    foreach($lesSalles as $leSalle){
        $ch= '';
        $ch .='<td>' . $leSalle->getNumSalle() . '</td>';
        $ch .='<td>' . $leSalle->getLibSalle() . '</td>';
        $ch .='<td>' . $leSalle->getEtage() . '</td>';
        $nb = $classSale->getTotalNbEquipt($leSalle->getNumSalle());
        if ($nb==0) $ch .='<td><a href="editSalleEquipt.php?op=a&num='
        .urlencode($leSalle->getNumSalle()) .'" class="info" >inventaire</a></td>';
        else $ch .='<td><a href="salleEquipt.php?num='
        .urlencode($leSalle->getNumSalle()) .'" class="info" >' .$nb .'</a></td>';
        $ch .='<td><a href="editSalle.php?op=m&num=' .urlencode($leSalle->getNumSalle())
        .'" class="modifier">Modifier</a></td>';
        $ch .= '<td><a href="editSalle?op=s&num=' .urlencode($leSalle->getNumSalle()) .'" >
        <img src="../vue/style/corbeille.png"></a></td>';
        $lignes[] = "<tr>$ch</tr>";
    }
    unset($lesSalles);

    require_once("../vue/gestionSalle.php");
?>