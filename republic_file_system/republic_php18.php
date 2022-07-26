<?php 

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/data.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Abre o arquivo para leitura
        $handle = fopen ( $file ,"r" ) or die ( "ERRO: Não é possível abrir o arquivo." );

        // Lê número fixo de bytes de um arquivo
        $content = fread( $handle, "20" );

        // Fechando o manipulador de arquivo
        fclose ( $handle );

        // Exibe o conteúdo do arquivo
        echo $content;

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>