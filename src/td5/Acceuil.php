<?php
    session_start();

    if(isset($_SESSION["login"])) {
        $message = "Bienvenue" . $_SESSION["login"];  
    }

    include("AccueilView.php");
?>