<form action="index.php" method="get">
    <label for="string">str:</label>
    <input type="text" name="string" id="string">
    <select name="fonction" id="fonction">
        <option value="">choisir une option</option>
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <input type="submit" name="submit" id="send">
</form>

<?php

var_dump($_GET);

