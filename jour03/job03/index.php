<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = array('a', 'e', 'i', 'o','I');

for ($i = 0; isset($str[$i])==true;$i++){
    for ($j = 0; isset($voyelles[$j]); $j++){
        if($voyelles[$j] == $str[$i]){
            echo $str[$i];
        }
    }
}