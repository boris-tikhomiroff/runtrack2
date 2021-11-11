<!-- 
Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php
session_start();
if (isset($_POST['prenom'])) {
    $_SESSION['name'] = $_SESSION['name'] . ' ' . $_POST['prenom'];
    echo $_SESSION['name'];
}

//reset_btn//
if (isset($_POST['reset_btn'])) {
    session_unset();
}

?>

<form action="index.php" method="post">
    <label for="prenom">prenom:</label>
    <input type="text" name="prenom" id="prenom">
    <label for="send"></label>
    <input type="submit" name="envoyer" id="send">
    <label for="submit"></label>
    <input type="submit" name="reset_btn" id="submit" value="reset">
</form>