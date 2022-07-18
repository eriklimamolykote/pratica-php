<?php

    // Inlcuindo o arquivo
    require_once "my_functions.php";
    // Chamando a função
    multiplySelf( 2 ); // Saída: 4
    echo "<br>";

    // Incluindo o arquivo mais uma vez
    require_once "my_functions.php";
    // Chamando a função
    multiplySelf( 5 ); // Saída: 25

?>