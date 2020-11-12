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
<?php
$server = "localhost";
$login = "root";
$password = "";
$request = "SELECT * FROM etudiants WHERE 1";


//ETABLIR CONNEXION DB
$connexion = mysqli_connect($server , $login , $password, 'jour08');

//mysqli_query  Exécute une requête sur la base de données
$query = mysqli_query($connexion,$request);

//RECUP TOUTE LES DONNEE SOUS FORME DE TABLEAU DE TABLEAU ASSOCIATIF
$resultat = mysqli_fetch_all($query);


////mysqli_fetch_assoc  Récupère une ligne de résultat sous forme de tableau associatif


?>
<!--//REVOIR RECUP NOM DES CHAMPS AVEC ASSOC-->
<table class="style">
<!--    NOM DES CHAMPS-->
    <thead class="style">
        <th class="style">ID</th>
        <th class="style">Prénom</th>
        <th class="style">Nom</th>
        <th class="style">Naissance</th>
        <th class="style">Sexe</th>
        <th class="style">Email</th>
    </thead>
<!--VALEUR DES CHAMP-->
    <tbody class="style">
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][0] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][1] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][2] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][3] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][4] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][5] ,"</br>";}?></td>
    </tbody>
</table>
<!--STYLE RAPIDE-->
<style>
    .style{
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 10px;
    }

</style>



<?php

//VERIF CONNEXION
if (!$connexion)
{
    die("Error\:".mysqli_connect_error() );
}

echo "";


?>
</body>
</html>