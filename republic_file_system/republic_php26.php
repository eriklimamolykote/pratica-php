<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/file.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Tenta renomear o arquivo
        if( rename( $file, "/home/erik/Área de Trabalho/pratica-php/republic_file_system/newfile.txt" ) ) {

            echo "Arquivo renomeado com sucesso.";

        } else {

            echo "ERRO: Arquivo não pode ser renomeado.";

        }

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>