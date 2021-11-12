<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT COUNT(*) FROM etudiants");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>nb_etudiants</th>
        </tr>
        <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['COUNT(*)'].'</td></tr>';                
            };
            
        ?>
        </tbody>
    </thead>
</table>