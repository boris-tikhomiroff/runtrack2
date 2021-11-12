<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM `etudiants` WHERE `sexe` = 'Femme'");
$student = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>
        </tr>
        <tbody>
        <?php foreach($student as $students): ?>
            <tr>
                <td></td>
                <td><?=$students['prenom'];?></td>
                <td><?=$students['nom'];?></td>
                <td><?=$students['naissance'];?></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </thead>
</table>