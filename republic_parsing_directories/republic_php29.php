<?php

    // Caminho do arquivo fonte
    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/example.txt";

    // Caminho do arquivo destino
    $newfile = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/backup/example.txt";

    // Verifica a existência do arquivo
    if( file_exists( $file ) ) {

        // Tenta copiar o arquivo
        if ( copy( $file, $newfile ) ) {

            echo "Arquivo copiado com sucesso.";

        } else {

            echo "ERRO: Arquivo não pode ser copiado.";

        }

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>