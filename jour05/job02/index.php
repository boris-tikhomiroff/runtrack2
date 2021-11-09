<?php

echo bonjour(true);

function bonjour($jour) {
    if($jour == true){
        echo "bonjour";
    }
    else {
        echo "bonsoir";
    }
    return (0);
}