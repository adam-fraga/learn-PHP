<?php
// DEMARRE SESSION
session_start();

if ($_SESSION['nbvisites'] == true) {
    $_SESSION['nbvisites']++;
} 
else {
    $_SESSION['nbvisites'] = 1;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    # code...
}


echo "</pre>";
print_r($_SESSION);
echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <p>Nombre de visite: </p> -->
    <br>
    <form action="" method="POST">
        <button type="submit"  name="reset">Reset</button>
    </form>

</body>

</html>