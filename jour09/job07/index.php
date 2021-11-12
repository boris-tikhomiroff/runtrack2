<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT SUM(`superficie`) FROM etage");
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
                echo '<tr><td>'.$etudiant["SUM(`superficie`)"].'</td></tr>';                
            };
            
        ?>
        </tbody>
    </thead>
</table>