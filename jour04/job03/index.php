

<form class="form" action="index.php" method="POST">
    <?php echo "</br>";   ?>

    <label for="name">Nom</label>
    <input type="text" name="name" id="name">

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>

    <label for="fname">Prenom</label>
    <input type="fname" name="fname" id="fname">

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>

    <label for="user">User</label>
    <input type="text" name="user" id="user">

    <?php echo "</br>";   ?>

    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass">

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>


    <label for="tel">Telephone</label>
    <input type="tel" name="tel" id="tel">

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>

    <label for="birth">Date</label>
    <input type="date" name="birth" id="birth">

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>

    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail">

    <button type="submit" value="submit">Envoyer</button>

    <?php echo "</br>";   ?>
    <?php echo "</br>";   ?>


</form>

<style>

.form{
    width: 30% ;
    margin: 0;
    display: flex;
    flex-direction: column;
    margin: auto;
}
</style>


<?php
$i = 0;
foreach ($_POST as $key => $value) {
    $i++;
}
echo "[$i]</br>";
?>