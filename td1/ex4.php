<!DOCTYPE html>
    <html>
        <head>
            <title>Bonjour</title>
            <meta charset="utf8" />
        </head>
    <body>
        <ul>
            <?php
                function boucleYes(int $nb): string {
                    $liste = " ";
                    for ($i=1; $i*$nb<=50; $i++) {
                        $nombre = $i*$nb;;
                        $liste .= " ";
                        $liste .= (string)$nombre;
                    }
                    return $liste;
                }
                for ($i=0; $i<=10; $i++) {
                    switch($i) {
                        case $i % 2 === 0 && !($i % 3 === 0):
                            $divisibilité = "est divisible par 2";
                        break;
                        case $i % 3 === 0 && !($i % 2 === 0):
                            $divisibilité = "est divisible par 3";
                        break;
                        case $i % 2 === 0 && $i % 3 === 0:
                            $divisibilité = "est divisible par 2 et par 3";
                        break;
                        default: $divisibilité = "n'est ni divisible par 2 et 3";
                    }
                    echo "<li>", $i, " ", $divisibilité, "</li>";
                }
            ?>
        </ul>
        <?php
            echo "<p> nb = ", "2", " :", $string = boucleYes(2), "</p>";
            echo "<p> nb = ", "3", " :", $string = boucleYes(3), "</p>";
            echo "<p> nb = ", "4", " :", $string = boucleYes(4), "</p>";
            echo "<p> nb = ", "5", " :", $string = boucleYes(5), "</p>";
            echo "<p> nb = ", "6", " :", $string = boucleYes(6), "</p>";
            echo "<p> nb = ", "7", " :", $string = boucleYes(7), "</p>";
            echo "<p> nb = ", "8", " :", $string = boucleYes(8), "</p>";
            echo "<p> nb = ", "9", " :", $string = boucleYes(9), "</p>";
            echo "<p> nb = ", "10", " :", $string = boucleYes(10), "</p>";
        ?>
    </body>
</html>