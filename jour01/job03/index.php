<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $int = 20;
    $bool = true;
    $str = "chaine de caractère";
    $float = 6.55957;
    ?>
    <table class="border">
        <thead>
            <th class="border">Type</th>
            <th class="border">Nom</th>
            <th class="border">Valeur</th>
        </thead>
        <tbody>
            <tr>
            <td class="border"><?php echo gettype($int); ?></td>
            <td class="border"><?php echo $int; ?></td>
            <td class="border">Une variable de type "integer" contient un entier</td>
        </tr>
        <tr>
            <td class="border"><?php echo gettype($str); ?></td>
            <td class="border"><?php echo $str; ?></td>
            <td class="border">Une variable de type "string" contient une chaine caractère</td>

        </tr>
        <tr>
            <td class="border"><?php echo gettype($bool); ?></td>
            <td class="border"><?php echo $bool; ?></td>
            <td class="border">Une variable de type boolean permet de definir l'Etat "Vrai" ou "Faux" </td>
        </tr>
        <tr>
            <td class="border"><?php echo gettype($float); ?></td>
            <td class="border"><?php echo $float; ?></td>
            <td class="border">Une variable de type double (flottant)) contient un décimal </td>
        </tr>
</tbody>
    </table>

</body>

</html>

<style>
    .border {
        border: 1px solid black;
        padding: 5px;
        border-collapse: collapse;
        text-align: center;
    }
</style>