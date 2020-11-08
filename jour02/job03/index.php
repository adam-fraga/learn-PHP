
    <?php
    $nombre = 0;
    $str = "La Plateforme_";
#Tant que nombre strictement inferieur a 100 incrémente de 1
    while ($nombre < 100) {
        $nombre++;
        #Si nombre inferieur ou egal a 20 affiche nombre en italique
        if ($nombre <= 20) {
            echo "<i>$nombre</i> </br>";
        }
        #sinon si nombre inferieur ou egal a 25 et nombre inferieur ou egal a 50 et nombre diff de 42 affiche nombre
        else if ($nombre >= 25 && $nombre <= 50 && $nombre != 42) {
            echo " <u> $nombre </u> </br>";
        }
        #sinon si nombre strictement egal a 42 affiche Str
        else if($nombre == 42)
        {
            echo "$str </br>";
        }
        #Dans tout les autre cas affiche nombre
        else{
            echo "$nombre </br>";
        }

        
    }


    ?>
