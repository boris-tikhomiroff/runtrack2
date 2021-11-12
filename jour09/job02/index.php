<?php
$bdd = mysqli_connect('localhost', 'root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM `salles`");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>id_étage</th>
            <th>Capacités</th>
        </tr>
        <tbody>
        <?php foreach($salles as $salle): ?>
            <tr>
                <td></td>
                <td><?=$salle['nom'];?></td>
                <td></td>
                <td><?=$salle['capacite'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </thead>
</table>