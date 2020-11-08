
<form action="" method="GET">

<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre">

<button type="submit" value="submit" >Test ton nombre</button>

</form>

<?php  
$nombre;
$nombre = ($_GET['nombre']);
foreach($_GET as $key => $value){
}
if($nombre % 2 == 0)
{
    echo "Nombre Pair";
}
else{
    echo "Nombre impair";
}
?>