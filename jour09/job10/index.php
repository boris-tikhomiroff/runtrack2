<?php
$bdd = mysqli_connect('localhost','root','','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM salles ORDER BY `capacite` ASC");
$salle = mysqli_fetch_all($requete, MYSQLI_ASSOC);


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
