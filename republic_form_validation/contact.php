<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Validação de Formulário</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Funções para filtrar entradas do usuário
            function filterName( $field ) {

                // Sanitiza nome de usuário
                $field = filter_var( trim( $field ), FILTER_SANITIZE_STRING );

                // Valida nome de usuário
                if ( filter_var( $field, FILTER_VALIDATE_REGEXP, 
                    array( "options" => array( "regexp" => "/^[a-zA-Z\s]+$/") ) ) ) {

                        return $field;

                } else {

                    return FALSE;

                }
            }    

        ?>    

    </body>
</html>