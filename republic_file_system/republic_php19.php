<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file) ) {

        // Abre o arquivo para leitura
        $handle = fopen( $file, "r" ) or die ( "ERRO: Não é possível abrir o arquivo." );

        // Lendo todo o arquivo
        $content = fread( $handle, filesize( $file ) );

        // Fechando o manipulador de arquivo
        fclose( $handle );

        // Exibe o conteúdo do arquivo
        echo $content;

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>