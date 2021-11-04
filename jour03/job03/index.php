<?php 
$str = "I'm sorry Dave I'm afraid I can't do that";
$char = array('a', 'e', 'i','o', 'u','y', 'I');

for($i = 0; isset($str[$i]); $i++) 
    for ($j = 0; isset($char[$j]); $j++) {
    if ($str[$i]== $char[$j]) {
        echo "$str[$i]";
    }
    }