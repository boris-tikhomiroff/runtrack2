<?php 
$tableau = array(200, 204, 173, 98, 171, 404, 459);
for ($num = 0; $num < 6; $num++ ) {
    if ($tableau[$num] % 2 == 0) {
        echo $tableau[$num] . "est paire <br/>";
    }
    else {
        echo $tableau[$num] . "est impaire <br/>";
    }
}