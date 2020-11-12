<?php
//Variable de connexion DB et variable de requête
        $host = 'localhost';
        $login = 'root';
        $pass = '';
        $request = "SELECT * FROM etudiants WHERE prenom LIKE  'T%' ";

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
$result= mysqli_fetch_assoc($query);
$result2 = mysqli_fetch_all($query);


foreach ($result as $key => $value)

echo "<pre>";
print_r($result2);
echo "</pre>";

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
        <?php foreach ($result as $key => $value){ echo "<th> $key </th> ";}?>
    </tr>
    <tr>
        <?php  foreach($result2 as $key2 => $value2){ echo "<td>  </td> ";}?>
    </tr>
</table>
</body>
</html>
