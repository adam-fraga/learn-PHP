<?php
//Variable de connexion DB et variable de requête
        $host = 'localhost';
        $login = 'root';
        $pass = '';
//REQUETE SELECT TABLE ETUDIANT LES PRENOM COMMENCEANT PAR T MAJ
        $request = "SELECT * FROM etudiants WHERE prenom LIKE 'T%' ";

//Connexion Database
$connexion =mysqli_connect($host,$login,$pass,'jour08');

//TEST CONNEXION
if (!$connexion)
{
   echo  "Error"; die( mysqli_connect_error());
}
echo "Connexion OK";

//mysqli_query  Exécute une requête sur la base de données
$query = mysqli_query($connexion,$request);

//mysqli_fetch_assoc  Récupère une ligne de résultat sous forme de tableau associatif

//Recup tableau associatif pour nom des champs
$assoc = mysqli_fetch_assoc($query);
//recup all sauf terry deja recup par assoc, donc recup value dans assoc
$all = mysqli_fetch_all($query);

//Stockage de tab toto dans variable toto
$toto = $all[0];



?>
<!--HTML-->
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
<table>
    <tr>
        <?php foreach ($assoc as $col => $val){ echo "<th class='style'> $col</th>";}?>
    </tr>
    <tr>
        <?php  foreach($toto as $key => $val_toto){ echo "<td class='style'> $val_toto</td> <br> ";}?>
    </tr>
    <tr>
        <?php foreach ($assoc as $key => $val_terry){ echo "<td class='style'> $val_terry </td>";} ?>
    </tr>
</table>
</body>
</html>
<!--FAST STYLE-->
<style>
    .style{
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 10px;
    }
</style>
