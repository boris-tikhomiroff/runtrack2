<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-12-31'");
$students = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>etudiants nées entre 1998 et 2018</th>
        </tr>
        <tbody>
        <?php foreach($students as $student): ?>
    <tr>
        <td><?=$student["prenom"];?></td>
        <td><?=$student["nom"];?></td>
        <td><?=$student["naissance"];?></td>
        
    </tr>
<?php endforeach;?>
        </tbody>
    </thead>
</table>