<form action="index.php" method="post">
        <input type="text" name="nom" placeholder="name"> <br>
        <input type="text" name="prenom" placeholder="prenom"> <br>
        <input type="text" name="email" placeholder="adresse email"> <br>
        <input type="submit" name="envoyer"> <br>
</form>

<?php
$compteur = 0;

foreach($_POST as $key => $value)
{
   $compteur++;
}

echo $compteur;
?>