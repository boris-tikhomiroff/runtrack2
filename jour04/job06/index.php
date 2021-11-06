

<form action="index.php" method="get">
    <label for="nombre">Nombre :</label>
    <input type="number" name="nombre" id="nombre">
    <input type="submit" name="submit" value="submit">
</form>

<?php

if($_GET['nombre'] % 2 == 0) {
    echo $_GET['nombre']. "Nombre pair";
}
else{
    echo $_GET['nombre'] . "Nombre impair";
}
?>