<?php
$bdd = mysqli_connect('localhost','root','','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM salles");
$salle = mysqli_fetch_all($requete, MYSQLI_ASSOC);
$requete2 = mysqli_query($bdd, "SELECT SUM(`capacite`) FROM salles");
$salleSpecify = mysqli_fetch_all($requete2, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');

?>
<table>
<thead>
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>id_etage</td>
        <td>capacites</td>
        
    </tr>
</thead>
<tbody>
<?php foreach($salle as $salles): ?>
    <tr>
        <td><?=$salles["id"];?></td>
        <td><?=$salles["nom"];?></td>
        <td><?=$salles["id_etage"];?></td>
        <td><?=$salles["capacite"];?></td>
        
    </tr>
<?php endforeach;?>
</tbody>
</table>

<table>
    <thead>
        <tr>
            <td>superficie_totale</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($salleSpecify as $salle2): ?>
        <tr>
            <td><?=$salle2["SUM(`capacite`)"];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>