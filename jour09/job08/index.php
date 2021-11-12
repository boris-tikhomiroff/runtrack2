<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT SUM(`capacite`) FROM salles");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>capacite_totale</th>
        </tr>
        <tbody>
        <?php
            foreach($etudiants as $capacite){
                echo '<tr><td>'.$capacite["SUM(`capacite`)"].'</td></tr>';                
            };
            
        ?>
        </tbody>
    </thead>
</table>