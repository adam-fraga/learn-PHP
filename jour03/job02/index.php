<?php
#Creation chaine de caractere
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
#Pour index = 0, si mon index est inferieur a 77 (nombre de caractere de ma chaine), incremente mon index de 2  
for($i=0;  $i < 77; $i+=2)
{
    #affiche i qui pointe sur 1 caractere sur 2 de ma chaine.
   echo "$str[$i]";
}
?>