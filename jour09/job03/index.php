<?php

    $host = "localhost";
    $login = "root";
    $pass = "";
    $request= "SELECT prenom , nom , naissance  FROM etudiants WHERE sexe = 'Femme'";
    $i = 0;

    //mysqli_connect ETABLIT CO AVEC LA DB PRENDS 4 PARAMETRES
    $connexion = mysqli_connect($host,$login,$pass,'jour08');

    //mysqli_query  Exécute une requête sur la base de données
    $query = mysqli_query($connexion, $request);

    //mysqli_fetch_assoc  Récupère une ligne de résultat sous forme de tableau associatif
    $resultat=mysqli_fetch_assoc($query);

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
                  <?php  foreach ($resultat as $key => $value ){echo "<th class='style'>$key </th>";} ?>
            </thead>
            <tbody class="style">
                 <?php  foreach ($resultat as $key => $value ){echo "  <td class='style'> $value </td> ";} ?>
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

<?php mysqli_close($connexion); ?>