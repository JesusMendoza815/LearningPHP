<?php
    $str = 'uno|dos|tres|cuatro';

    // límite positivo
    print_r(explode('|', $str, 4));

    echo '<br>';
    // límite negativo
    print_r(explode('|', $str, -1));
?>