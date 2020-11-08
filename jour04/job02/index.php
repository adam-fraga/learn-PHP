
<!-- PHP -->


<!-- FORMULAIRE HTML -->
<form class="form" method="GET" action="index.php">

<label for="name">Nom</label>
<input type="text" name="name" id="name">

<?php echo "</br>";?>
<?php echo "</br>";?>

<label for="fname">Prénom</label>
<input type="text" name="fname" id="fname">

<?php echo "</br>";?>
<?php echo "</br>";?>

<label for="tel">télépone</label>
<input type="tel" name="tel" id="tel">

<?php echo "</br>";?>
<?php echo "</br>";?>

<label for="mail">Email</label>
<input type="email" name="mail" id="mail">

<button type="submit" value="submit" >Envoyer</button>


</form>

<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
?>


<!-- TABLEAU HTML -->
<table class="table">
    <th>
        <td class="table">Argument</td>
        <td class="table" >Valeur</td>
    </th>
    <tr>
        <td></td>
        <td class="table">
            <!-- MABOUCLE PHP POUR MON ARGUMENT -->
    <?php  
        $i=0;
        foreach($_GET as $key => $value)
{
    $i++;
    echo "$key</br>";
}
    ?>
</td>
 <!-- MABOUCLE PHP POUR VALUE -->
        <td class="table">
        <?php  
        $i=0;
        foreach($_GET as $key => $value)
{
    $i++;
    echo "$value</br>";
}
    ?>
</td>
        </td>
    </tr>
</table>



<!-- STYLE -->
<style>
.form{
    border:2px solid black;
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: auto;
}


.table {

border:2px solid black;
border-collapse: collapse;
} 
</style>

