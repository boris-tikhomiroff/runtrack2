<?php

$tableau = array('200', '204', '173', '98', '171', '404', '459');

for($i= 0; isset($tableau[$i])==true; $i++) {
    if ($tableau[$i] % 2 == 0) {
        echo $tableau[$i] . "est paire" . '<br/>';
    }
    else {
        echo $tableau[$i] . "est impaire" . '<br/>';
    }
}