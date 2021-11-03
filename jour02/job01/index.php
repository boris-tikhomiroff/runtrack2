<?php
$i = 0; 

while ($i < 1338) // Boucle While
{
    echo $i++ . '<br />';

    if ($i == 42) {
        echo '<b><u>';
    }
    else {
        echo '</b></u>';
    }
}

// for( $i = 0; $i <= 1337; $i++) { // Boucle for
//     echo $i . '<br />';

//     if ($i === 41) {
//         echo '<b><u>';
//     }
//     else {
//         echo '</b></u>';
//     }
// }
?>