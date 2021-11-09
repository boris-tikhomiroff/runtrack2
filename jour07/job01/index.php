<?php

session_start();
$_SESSION['nbvisites'] = $_SESSION['nbvisites']+1;
echo $_SESSION['nbvisites'];

if(isset($_POST['reset'])==true){
    session_destroy();
}


else{
    $_SESSION['nbvisites'];
}
?>


<form action="index.php" method="post">
    <label for="reset"></label>
    <input type="submit" name="reset" id="reset" value="reset">
</form>