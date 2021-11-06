<form action="index.php" method="post">
    <label for="prenom">Prenom:</label>
    <input type="text"name="prenom" id="prenom"><br>
    <label for="nom">nom:</label>
    <input type="text"name="nom" id="nom"><br>
    <input type="submit" value="submit">
</form>

<table>
    <thead>
        <tr>
            <th>argument</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php foreach($_POST as $key => $value){echo $key.'<br/>';} ?></td>
            <td> <?php foreach($_POST as $key => $value){echo $value.'<br/>';} ?></td>
        </tr>
    </tbody>
</table>