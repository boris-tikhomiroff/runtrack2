<?php 

$str = "On n est pas le meilleur quand on le croit mais quand on le sait.";
$compteur1 = 0;
$compteur2 = 0;
$dic = array (
    'consonnes' => ['b', 'c', 'd', 'f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','z','B','C','D','F','G','H','J','K', 'L','M','N','P','Q','R','S','T','V','W','X','Z'],
    'voyelles' => ['a','e','i','o','u', 'y','A','E','I','O','U', 'Y'] 
);

for ($i=0; isset($str[$i]); $i++) {
    for ($j=0; isset($dic ['consonnes'][$j]); $j++) {
        if ($str[$i] == $dic['consonnes'][$j]) {
            $compteur1++;
        }
    }
    for ($k=0; isset($dic ['voyelles'][$k]); $k++) {
        if ($str[$i] == $dic['voyelles'][$k]) {
            $compteur2++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table>
        <thead>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $compteur1 ?></td>
                <td><?php echo $compteur2 ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>