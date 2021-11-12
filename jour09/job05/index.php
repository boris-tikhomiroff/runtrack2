<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM `etudiants` WHERE DATEDIFF (CURRENT_DATE, `naissance`) >= 6570");
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
                <td><?=$students['id'];?></td>
                <td><?=$students['prenom'];?></td>
                <td><?=$students['nom'];?></td>
                <td><?=$students['naissance'];?></td>
                <td><?=$students['sexe'];?></td>
                <td><?=$students['email'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </thead>
</table>