<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT (`capacite`) FROM salles ORDER BY `capacite` DESC");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<table>
    <thead>
        <tr>
            <th>salles</th>
        </tr>
        <tbody>
        <?php
            foreach($salles as $salle){
                echo '<tr><td>'.$salle['capacite'].'</td></tr>';                
            };
            
        ?>
        </tbody>
    </thead>
</table>