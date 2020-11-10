<?php

if (isset($_COOKIE['visite'])) {
    setCookie('nbvisites', $_COOKIE['nbvisites'] ++);
} else {
    setCookie('nbvisites', 1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="POST">
        <p><?php var_dump($_COOKIE['nbvisites']); ?></p>
        <br>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>