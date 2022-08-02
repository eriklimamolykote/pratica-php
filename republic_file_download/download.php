<?php

    if( isset( $_REQUEST[ "file" ] ) ) {

        // Obtém parâmetros
        $file = urldecode( $_REQUEST[ "file" ] ); // Decodifica cadeia de URL codificada

        /* Testa se o nome do arquivo contém caracteres ilegais
        tais como "../" usando expressão regular */
        if ( preg_match( '/^[^.][-a-z0-9_.]+[a-z]$/i', $file ) ) {
            
            $filepath = "images/" . $file;

            // Process download
            if( file_exists( $filepath ) ) {

                header( 'Descrição de conteúdo: Transferência de arquivo' );
                header( 'Tipo de conteúdo: application/octet-stream' );
                header( 'Disposição de conteúdo: attachment; filename="'.basename($filepath).'"');
                header( 'Expiração: 0' );
                header( 'Controle de cache: precisa revalidar' );
                header( 'Pragma: público' );
                header( 'Comprimento do conteúdo: ' . filesize( $filepath ) );
                flush(); // Flush system output buffer
                readfile( $filepath );
                die();
            } else {

                http_response_code( 404 );
                die();

            }

        } else {

            die( "Nome de arquivo inválido!" );

        }

    }

?>