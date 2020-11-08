<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelle="aeiouyAEIOUY";
#Pour index i=0, définit la valeur null a la fin de ma chaine de caractere 
for($i=0; isset($str[$i]); $i++)
{  
    #Pour compteur j pointe sur premeir caractere , definit une fin a chaine et incremente compteur J
    for($j=0; isset($voyelle[$j]); $j++)
    {
        #si compteur I pointant sur case 1 str = a compteur J pointant sur string voyelle
        if($str[$i] == $voyelle[$j])
        {
            #Affiche Str de i
        echo $str[$i];
        }
    }
}
?>