<?php
//VARIABLE
$str = "On n est pas le meilleur quand
on le croit mais quand on le sait";
$occurence = 0;
$dic =
[
'consonnes' => ["BCDFGHJKLMNPQRSTVWXZbcdfghjklmnpqrstvwxz"],
'voyelles' => ["AEIOUYaeiouy"]
];
$nb_voyelle = 0;
$nb_consonne = 0;

//BOUCLE DE DICTIONNAIRE
foreach ($dic['voyelles'] as $key => $voyelles)
foreach ($dic['consonnes'] as $key => $consonnes)

//VOYELLES
for ($i = 0; isset($str[$i]); $i++) {
for ($j = 0; isset($voyelles[$j]); $j++) {
if ($str[$i] == $voyelles[$j]) {
$nb_voyelle++;
}
}
}
//CONSONNE
for ($i = 0; isset($str[$i]); $i++) {
for ($k = 0; isset($consonnes[$k]); $k++) {
if ($str[$i] == $consonnes[$k]) {
$nb_consonne++;
}
}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="border" >
    <thead class="border" >
    <tr class="border" >
        <th class="border" ><?php echo "Voyelles"?></th>
        <th class="border" ><?php echo "Consonnes"?></th>
    </tr>
    </thead>
    <tbody class="border" >
    <tr class="border" >
        <td class="border" ><?php echo $nb_voyelle?></td>
        <td class="border" ><?php echo $nb_consonne?></td>
    </tr>

    </tbody>
</table>
</body>
</html>
<!--FAST STYLE-->
<style>
    .border{
        padding: 10px;
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        margin: auto;
    }
</style>