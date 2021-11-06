<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait.";
$dic = array(
    'consonnes' => 'n', 's','t','p','l','m','r','q','n','d','r','t',
    'voyelles' => 'a','e','i','o','u','O');

$compteur1 = 0;
$compteur2 = 0;

for($i = 0; isset($str[$i]); $i++){
    for($j = 0; isset($dic['voyelles'][$j]); $j++){
        if($str[$i] == $dic['voyelles'][$j]){
            $compteur1++;
        }
    }
    for($k= 0; isset($dic['consonnes'][$k]); $k++){
        if($str[$i] == $dic['consonnes'][$k]){
            $compteur2++;
        }
    }
}
?>

<table>
    <thead>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $compteur1?></td>
            <td><?php echo $compteur2?></td>
            </tr>
    </tbody>
</table>