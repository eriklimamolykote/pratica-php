<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Lê todo o arquivo numa string
        $content = file_get_contents( $file ) or die ( "ERRO: Não é possível abrir o arquivo." );

        // Exibe o conteúdo do arquivo
        echo $content;

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>