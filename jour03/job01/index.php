<?php
#Créer un tableau de int;
$tab_nombre = [200, 204, 173, 98, 171, 404, 459];
#Pour chaque valeur du tableau declare une variable $nombre.
foreach($tab_nombre as $nombre ){
    #Si $nombre modulo 2 est strictement egal a 1 alors affiche le nombre et "est impair" 
        if ($nombre%2 == 1)
        echo "$nombre est impair</br>";
        #Dans tout les autres cas affiche le nombre et dis qu'il est pair.
        else {
            echo "$nombre est pair</br>";
        }
}
?>
