<?php
$phrase = "J'ai bien mangé, le croque monsieur était délicieux";
$lettre = "e";
function occurrences($str, $char)
{

    $compteur = 0;
    for ($i = 0; isset($str[$i]) == true; $i++) {
        if ($str[$i] == $char) {
            $compteur++;
        }
    }

    return ($compteur);
}

echo occurrences($phrase, $lettre);