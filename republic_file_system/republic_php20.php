<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Lê e processa todo o arquivo
        readfile( $file ) or die( "ERRO: Não é possível abrir o arquivo." );

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>