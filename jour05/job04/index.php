<?php
function calcule( $a , $operation, $b)
{
$resultat=0;

    if($operation == "/")
    {
    $resultat = ($a / $b);
    
    }
    elseif($operation == "+")
    {
    $resultat = ($a + $b);
    

    }
    elseif($operation == "-")
    {
    $resultat = ($a - $b);
    
    }
    elseif($operation == "*")
    {
    $resultat = ($a * $b);
    
    }

    elseif($operation == "%")
    {
    $resultat = ($a % $b);
    
    }
    else{
        echo"Mec...";
    }
    return $resultat;
}

?>