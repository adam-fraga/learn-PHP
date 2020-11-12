
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
$request = "SELECT * FROM salles WHERE 1";


//ETABLIR CONNEXION
$connexion = mysqli_connect($server , $login , $password, 'jour08');

//ENVOI LA REQUETE AU SERVEUR MYSQL
$query = mysqli_query($connexion,$request);
//RECUP DONNEE
$resultat = mysqli_fetch_all($query);

/*foreach ($resultat as $key => $value){
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
}
*/?>

<table class="style">
    <thead class="style">
        <th class="style">Nom des salles</th>
        <th class="style">Capacité des salles</th>
    </thead>

    <tbody class="style">
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][1] ,"</br>";}?></td>
        <td class="style"><?php  foreach ($resultat as $key => $value) {echo $resultat[$key][3] ,"</br>";}?></td>
    </tbody>
</table>

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