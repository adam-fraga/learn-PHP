
    <?php
    $nombre = 0;
    #Tant que nombre strictement inferieur a 1337
    while ($nombre < 1337) {
        #Incremente de 1
        $nombre += 1;
        # Si Nombre différent de 26 et different de 37 et... Affiche nombre et retourne àl a ligne
        if ($nombre !=  26 && $nombre !=  37 && $nombre != 88 && $nombre !=  1111 && $nombre != 3233) {
            echo "$nombre </br>";
        }
    }
    ?>
