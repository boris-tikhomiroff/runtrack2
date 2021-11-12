<?php
$bdd = mysqli_connect('localhost', 'root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM `salles`");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Capacités</th>
        </tr>
        <tbody>
        <?php
            foreach($salles as $salle){
                echo '<tr><td>'.$salle['nom'].'</td>';
                echo '<td>'.$salle['capacite'].'</td></tr>';
            };
        ?>
        </tbody>
    </thead>
</table>