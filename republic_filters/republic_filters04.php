<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Filtros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Amostra de endereço IP
            $ip = "172.16.254.1";

            // Valida amostra de endereço IP
            if ( filter_var( $ip, FILTER_VALIDATE_IP ) ) {

                echo "<b>$ip</b> é um endereço IP válido";

            } else {

                echo "<b>$ip</b> não é um endereço IP válido";
                
            }

        ?>    

    </body>
</html>