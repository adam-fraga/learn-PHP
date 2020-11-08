
<form class="size border" action="index.php" method="POST">

<label for="user">User</label>
<input type="user" name="user" id="user">

 <?php echo "</br>"; ?>
 <?php echo "</br>"; ?>

<label for="pass">Password</label>
<input type="password" name="pass" id="pass">

<button type="submit" value="submit" >Envoyer</button>

<?php echo "</br>"; ?>
 <?php echo "</br>"; ?>

</form>


<table class="border size">
<tr>
    <td class="border" >Argument</td>
    <td class="border" >Valeur</td>
</tr>

<tr>
    <td class="border" >

    <?php
$i=0;
foreach($_POST as $key => $value)
{
$i++;

echo "$key </br> ";
}

?>

    </td>
    <td class="border" >
    <?php
$i=0;
foreach($_POST as $key => $value)
{
$i++;
echo "$value </br>";
}

?>

    </td>
</tr>
</table>

<style>
    .size {
        margin: auto;
        width: 30%;
    }
    .border{
        border: 2px solid black;
    }
</style>

<?php echo "</br>"; ?>
<?php echo "</br>"; ?>
<?php echo "</br>"; ?>
<?php echo "</br>"; ?>
<?php echo "</br>"; ?>
<?php echo "</br>"; ?>
<?php echo "</br>"; ?>

