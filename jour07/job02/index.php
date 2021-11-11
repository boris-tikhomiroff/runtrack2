<?php

if(!isset($_COOKIE['nbvisiteurs'])){
    setcookie('nbvisiteurs', 1, time()+43200);
}
else {
    setcookie('nbvisiteurs',$_COOKIE['nbvisiteurs']+1, time()+43200);
    echo $_COOKIE['nbvisiteurs'];
}

if(isset($_POST['reset'])==true){
    setcookie('nbvisiteurs');
}

?>      

<form action="index.php" method="post">
    <label for="reset"></label>
    <input type="submit" name="reset" value="reset" id="reset">
</form>