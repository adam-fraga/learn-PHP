<form action="" method="GET">

    <label for="str">Str</label>
    <br>

    <input type="text" name="str" id="str">
    <br>
    <br>
    <select name="fonction" id="fonction">
        
            <option value="gras" name="gras">gras</option>
            <option value="cesar" name="cesar">cesar</option>
            <option name="laplateforme" value="laplateforme">plateforme</option>
        

    </select>
    <br>
    <br>
    <button type="submit" value="submit">Valider</button>

</form>


<!-- CODE EXERCICES -->


<?php
foreach ($_GET as $key => $value) {
    if ($_GET['fonction'] == 'gras') {

        echo gras($value);
    } elseif ($_GET['fonction'] == 'cesar') {
        echo cesar($value, 2);
    } elseif ($_GET['fonction'] == 'plateforme') {
        echo laplateforme($value);
    }
}
// echo "</pre> ";
// print_r($_GET);
// echo "</pre> ";
?>


<!-- CODE FONCTIONS EXERCICES -->


<?php

// FONCTION MET EN GRAS QUAND 1ere lettre majuscule

function gras($str)
{

    $majuscule = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for ($i = 0; isset($majuscule[$i]); $i++){

         if ($str[0] == $majuscule[$i])
        {
         return "<b>$str</b>";
        }
        
    }

}

// Fonction decale lettre en fonction de l'indice decalage par rapport à l'alphabet

function cesar($str, $decalage)
{
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $i = 0;
    $j = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        for ($j = 0; isset($alphabet[$j]); $j++) {
            if ($str[$i] == $alphabet[$j]) {
                $j += $decalage;    #OU $j = $j + $decalage
                $str[$i] = $alphabet[$j];
            }
        }
    }
    return $str; 

    // Fonction ajoutant un underscore aux mots finissant par "me"

}

function laplateforme($str)
{
    $i = -1;
    $j = -2;
    if ($str[$i] == 'e' && $str[$j] == 'm') {
      
    }
    return "$str _";
}


?>


<!-- A voir plus tard le 08/11/2020 a 20h18 -->