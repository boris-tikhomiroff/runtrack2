<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM `etudiants` WHERE `sexe` = 'Femme'");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>naisance</th>
        </tr>
        <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['nom'].'</td>';
                echo '<td>'.$etudiant['prenom'].'</td>';
                echo '<td>'.$etudiant['naissance'].'</td></tr>';
            };
        ?>
        </tbody>
    </thead>
</table>