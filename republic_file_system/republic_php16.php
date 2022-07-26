<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Check the existence of file
    if ( file_exists( $file ) ) {

        // Attempt to open the file
        $handle = fopen( $file, "r" );

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>