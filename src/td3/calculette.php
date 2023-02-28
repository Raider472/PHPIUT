<?php
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';

    $entier1 = (isset($_GET['text_valeur1'])?$_GET['text_valeur1']:null); 
    $entier2 = (isset($_GET['text_valeur2'])?$_GET['text_valeur2']:null);
    $submitAdd = (isset($_GET['addition_sub'])?$_GET['addition_sub']:null);
    $submitSous = (isset($_GET['soustra_sub'])?$_GET['soustra_sub']:null);
    $submitMult = (isset($_GET['mult_sub'])?$_GET['mult_sub']:null);
    $submitDiv = (isset($_GET['division_sub'])?$_GET['division_sub']:null);

    include 'ViewCalc.php';

    if($submitAdd != null) {
        echo "<section> <diV> <h1>Le resultat de l'opération:</h1> <p>". $entier1 . " + " . "$entier2" . " = " . $entier1 + $entier2 ."</p> </diV>  </section>";
    }
    if($submitSous != null) {
        echo "<section> <diV> <h1>Le resultat de l'opération:</h1> <p>". $entier1 . " - " . "$entier2" . " = " . $entier1 - $entier2 ."</p> </diV>  </section>";
    }
    if($submitMult != null) {
        echo "<section> <diV> <h1>Le resultat de l'opération:</h1> <p>". $entier1 . " X " . "$entier2" . " = " . $entier1 * $entier2 ."</p> </diV>  </section>";
    }
    if($submitDiv != null) {
        echo "<section> <diV> <h1>Le resultat de l'opération:</h1> <p>". $entier1 . " / " . "$entier2" . " = " . $entier1 / $entier2 ."</p> </diV>  </section>";
    }
    if ($submitAdd === null && $submitSous === null && $submitMult === null && $submitDiv === null) {
        echo "<section> <diV> <h1>Veuillez choisir une opération SVP !!!!!!!</h1> </diV>  </section>";
    }
?>