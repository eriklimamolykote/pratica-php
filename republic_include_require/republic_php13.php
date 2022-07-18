<?php
    // Incluindo o arquivo
    require "my_functions.php";
    // Chamando a função
    multiplySelf( 2 ); // Saída: 4
    echo "<br>";

    // Including o arquivo mais uma vez
    require "my_functions.php";
    // Chamando a função
    multiplySelf( 5 ); // Não executa

?>