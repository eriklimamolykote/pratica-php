<?php

    if ($_FILES[ "photo" ][ "error" ] > 0 ) {

        echo "Erro: " . $_FILES[ "photo" ][ "error" ] . "<br>";

    } else {

        echo "Nome do arquivo: " . $_FILES[ "photo" ][ "name" ] . "<br>";
        echo "Tipo de arquivo: " . $_FILES[ "photo" ][ "type" ] . "<br>";
        echo "Tamanho do arquivo: " . ( $_FILES[ "photo" ][ "size" ] / 1024 ) . "KB<br>";
        echo "Stored in: " . $_FILES[ "photo" ][ "tmp_name" ];

    }

?>