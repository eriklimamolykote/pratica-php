<?php

    $file = "/home/erik/Área de Trabalho/pratica-php/republic_file_system/note.txt";

    // String de dados para ser escrita
    $data = "A raposa marrom veloz pula sobre o cachorro preguiçoso.";

    // Escreve os dados no arquivo
    file_put_contents( $file, $data ) or die ( "ERRO: Não é possível escrever no arquivo." );

    echo "Dados escritos no arquivo com sucesso.";

?>