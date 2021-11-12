<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT AVG(`capacite`) FROM salles");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>moyenne capacité des salles</th>
        </tr>
        <tbody>
        <?php
            foreach($salles as $salle){
                echo '<tr><td>'.$salle["AVG(`capacite`)"].'</td></tr>';                
            };
            
        ?>
        </tbody>
    </thead>
</table>