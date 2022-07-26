<?php 

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/note.txt";

    // Verifica a existência do arquivo
    if ( file_exists( $file ) ) {

        // Tenta apagar o arquivo
        if ( unlink( $file ) ) {

            echo "Arquivo removido com sucesso.";

        } else {

            echo "ERRO: Arquivo não pode ser removido.";

        }

    } else {

        echo "ERRO: Arquivo não existe.";

    }

?>