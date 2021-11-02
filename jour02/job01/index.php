<?php
for( $i = 0; $i <= 1337; $i++ ) {
    echo $i . '<br />';

    if ($i === 41) {
        echo '<b><u>';
    }
    elseif ($i >= 42) {
        echo '</b></u>';
    }
}
?>
