<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Filtros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Amostra de URL de Web site
            $url = "http:://www.example.com";

            // Remove todos os caracteres ilegais da URL
            $sanitizedUrl = filter_var( $url, FILTER_SANITIZE_URL );

            // Valida URL do Web site
            if ( $url == $sanitizedUrl && filter_var( $url, FILTER_VALIDATE_URL ) ) {

                echo "$url é uma URL válida";

            } else {

                echo "$url <b id='not'>não</b> é uma URL válida";
                
            }

        ?>    

    </body>
</html>