<!-- Formulaire Html -->
<form method="GET" action="index.php">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">

    <?php echo "<br>"; ?>

    <label for="fname">Prénom</label>
    <input type="text" name="fname" id="fname">

    <?php echo "<br>"; ?>

    <label for="mail">Ton email</label>
    <input type="email" name="mail" id="mail">

    <?php echo "<br>"; ?>

    <label for="tel">Telephone</label>
    <input type="tel" name="tel" id="tel">

    <?php echo "<br>"; ?>

    <label for="birth">Date de naissance</label>
    <input type="date" name="date" id="date">

    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>

    <button type="submit" value="submit">Envoyer</button>

    <?php echo "<br>"; ?>

</form>

<!-- CODE PHP -->
<?php
#Toujours initialier variable à l'exterieur des boucles en PHP

$i = 0;

#$_GET Est un tableau generé automatiquement par PHP qui contient les donnés d'un formulaire quand on l'envoie.


#Pour chaque élément de Tableau "$_GET attribu une variable "$key" au clés et "$value" au valeur de mon tableau.
foreach ($_GET as $key => $value)
{
    $i++;
}

echo "$i";
?>