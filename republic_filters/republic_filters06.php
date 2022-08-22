<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Filtros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Amostra de endereço de e-mail
            $email = "someone@@example.com";

            // Remove todos os caracteres ilegais do e-mail
            $sanitizedEmail = filter_var( $email, FILTER_SANITIZE_EMAIL );

            // Valida endereço de e-mail
            if ( $email == $sanitizedEmail && filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {

                echo "$email é um endereço de e-mail válido";

            } else {

                echo "$email <b id='not'>não</b> é um endereço de e-mail válido";
                
            }

        ?>    

    </body>
</html>