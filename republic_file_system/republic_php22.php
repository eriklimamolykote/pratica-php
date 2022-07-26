<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Lê todo o arquivo em um vetor
        $arr = file ($file ) or die ( "ERRO: Não é possível abrir o arquivo." );

        foreach( $arr as $line ) {

            echo $line;

        }

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>