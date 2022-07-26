<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/nota.txt";

    // String de dados para ser escrito
    $data = "A raposa veloz marrom pula sobre o cão preguiçoso.";

    // Abre o arquivo para escrita
    $handle = fopen( $file, "w" ) or die ( "ERRO: Não é possível abrir o arquivo." );
    
    // Escreve os dados no arquivo
    fwrite( $handle, $data ) or die( "ERRO: Não é possível escrever no arquivo." );

    // Fechando o manipulador de arquivo
    fclose( $handle );

    echo "Dados escritos no arquivo com sucesso.";

?>