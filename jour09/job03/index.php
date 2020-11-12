<?php

$connexion = "localhost";
$login = "root";
$pass = "";
$request= "SELECT prenom , nom , naissance  FROM etudiants WHERE sexe = 'Femme'";
$i = 0;

//mysqli_connect ETABLIT CO AVEC LA DB PRENDS 4 PARAMETRES
$connexion = mysqli_connect($connexion,$login,$pass,'jour08');

//mysqli_query  Exécute une requête sur la base de données
$query = mysqli_query($connexion, $request);

//mysqli_fetch_assoc  Récupère une ligne de résultat sous forme de tableau associatif
$resultat=mysqli_fetch_assoc($query);

//TEST



echo "<pre>";
print_r($resultat);
echo "</pre>";
?>
<?php

//VERIF CONNEXION
if (!$connexion)
{
    die("Error\:".mysqli_connect_error() );
}

echo "";

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
<table>
        <thead class="style">
                <th class="style"><?php  foreach ($resultat as $key => $value ){echo "$key ";} ?></th>
        </thead>
        <tbody class="style">
                <td class="style"><?php  foreach ($resultat as $key => $value ){echo "$value ";} ?></td>
        </tbody>
</table>
</body>
</html>

<style>
    .style{
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 10px;
    }
</style>
