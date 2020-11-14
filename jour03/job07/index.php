<?php


$str = "Certaines choses changent, et d'autres
ne changeront jamais.";
$str2 = $str;
for ($i = 0; isset($str[$i]); $i++ )
    for ($j = 1 ; isset($str2[$j]) ; $j++)
    {
        $str[$i] = $str2[$j];
        $i++;
    }

echo "$str<br>";




