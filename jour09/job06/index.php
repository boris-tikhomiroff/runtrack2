<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM etudiants");
$studentAll = mysqli_fetch_all($requete, MYSQLI_ASSOC);
$requete2 = mysqli_query($bdd, "SELECT COUNT(*) FROM etudiants");
$studentSpecify = mysqli_fetch_all($requete2, MYSQLI_ASSOC);
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
    </thead>
    <tbody>
    <?php foreach($studentAll as $student): ?>
            <tr>
                <td><?=$student['id'];?></td>
                <td><?=$student['prenom'];?></td>
                <td><?=$student['nom'];?></td>
                <td><?=$student['naissance'];?></td>
                <td><?=$student['sexe'];?></td>
                <td><?=$student['email'];?></td>
            </tr>
    <?php endforeach;?>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>nb_etudiants</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($studentSpecify as $students): ?>
            <td><?=$students["COUNT(*)"];?></td>
        <?php endforeach;?>
    </tbody>
</table>