<form action="index.php" method="get">
    <label for="nombre">Votre nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="envoyer"></label>
    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
</form>

<?php
if(!isset($_GET['nombre'])){
    echo "Entrez un nombre";
}
elseif($_GET['nombre'] % 2 == 0){
    echo $_GET['nombre']."Nombre pair";
}
else{
    echo $_GET['nombre']."Nombre impaire";
}