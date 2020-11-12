<?php


$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    'voyelles' => ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"],
    'consonnes' => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"]
];
for ($x=0 ; isset($str[$x]) ; $x++) {
    foreach ($dic['voyelles'] as $key => $voyelles)
        foreach ($dic['consonnes'] as $key => $consonnes)














/*
echo "<pre>";
print_r($dic);
echo "</pre>";*/
