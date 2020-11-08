

<form action="" method="POST">

<label for="user">User</label>
<input type="text" name="user" id="user">

<?php echo "</br>";?>
<?php echo "</br>";?>

<label for="pass">Password</label>
<input type="password" name="pass" id="pass">

<button type="submit" value="submit" >Envoyer</button>

</form>

<?php



foreach($_POST as $key => $value)
{
    
}
    if($_POST['user'] == "John" && $_POST['pass'] == "Rambo")
    {
        echo "C'est pas ma guerre</br>";
       
    }
    else
    {
        echo "Votre pire cauchemar</br>";

    }




?>