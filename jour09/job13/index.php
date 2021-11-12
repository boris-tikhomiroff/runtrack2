<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT salles.nom AS 'SN', etage.nom AS 'EN' FROM salles INNER JOIN etage where salles.id = etage.id");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>Nom des salles</th>
            <th>Etages</th>
        </tr>
        <tbody>
        <?php foreach($salles as $salle): ?>
    <tr>
        <td><?=$salle["SN"];?></td>
        <td><?=$salle["EN"];?></td>
        
    </tr>
<?php endforeach;?>
        </tbody>
    </thead>
</table>