<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Open the file for reading
        $handle = fopen( $file, "r" ) or die ( "ERRO: Não é possível abrir o arquivo." );

        /* Algum código a ser executado */

        // Fechando o manipulador de arquivo
        fclose( $handle );

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>