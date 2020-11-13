<?php
$host = 'localhost';
$login = 'root';
$pass = "";

$request = "SELECT * FROM etudiants WHERE naissance > '2002-13-2002'";

//CONNEXION DB
$connexion = mysqli_connect($host,$login,$pass,'jour08');
//REQUETE
$query = mysqli_query($connexion,$request);

//Test connexion
if (!$connexion)
{
    echo "Error:"; mysqli_connect_error();
}
echo" Connexion Success"; ?>

<!--RECUP DATA-->
<?php

//Recup roxan associatif pour nom des champs
$assoc = mysqli_fetch_assoc($query);
//Recup tout les tableaux des personnes mineurs
$mineur = mysqli_fetch_all($query);

echo"<pre>";
print_r($assoc);
echo"</pre>";

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
<!--TABLEAU-->
    <table class="border">
        <tr>
           <?php foreach ($assoc as $key => $value){echo "<th class='border' > $key </th>";}?>
        </tr>
            <?php foreach ($assoc as $key => $value){echo "<td class='border' > $value </td>";}?>
        </tr>
        <tr>
        <?php foreach ($mineur[0] as $key => $value){echo "<td class='border' > $value </td>";}?>
        </tr>
        <tr>
            <?php foreach ($mineur[1] as $key => $value){echo "<td class='border' > $value </td>";}?>
        </tr>
    </table>
</body>
</html>
<!--FAST STYLE-->
<style>
.border {
    border-collapse: collapse;
    border:2px solid black ;
    padding: 5px;
}
</style>
<!--CLOSE DB-->
<?php  mysqli_close($connexion);?>
