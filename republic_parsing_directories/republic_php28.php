<?php

    // O caminho do diretório
    $dir = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/testdir";

    // Verifica a existência do diretório
    if ( !file_exists( $dir ) ) {

        // Tenta criar o diretório
        if ( mkdir( $dir ) ) {

            echo "Diretório criado com sucesso.";

        } else {

            echo "ERRO: Diretório não pode ser criado.";

        }

    } else {

        echo "ERRO: Diretório já existe.";

    }

?>