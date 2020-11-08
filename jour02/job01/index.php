
    <?php
    $nombre = 0;

#Tant que nombre strictement inferieur a 1337 incrémente nombre de 1
    while ($nombre  < 1337) {
        $nombre += 1;
#Si nombre strictement égal a 42 affiche le en gras et souligné
        if ($nombre == 42) {
            echo "<u><b>$nombre</b></u></br>";
#sinon affiche le normalement
        } else {
            echo "$nombre </br> ";
        }
    }
    ?>


<?php
