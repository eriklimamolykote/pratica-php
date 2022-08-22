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
            $url = "http:://www.example.com?topic=filters";

            // Valida URL do Web site por string de consulta
            if ( $url && filter_var( $url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED ) ) {

                echo "$url contém cadeia de consulta";

            } else {

                echo "$url <b id='not'>não</b> contém cadeia de consulta";
                
            }

        ?>    

    </body>
</html>