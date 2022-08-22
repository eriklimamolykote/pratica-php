<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Filtros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Amostra de valor inteiro
            $int = 0;

            // Valida amostra de valor inteiro
            if ( filter_var( $int, FILTER_VALIDATE_INT ) === 0 || filter_var( $int, FILTER_VALIDATE_INT ) ) {

                echo "<b>$int</b> é um inteiro válido";

            } else {

                echo "<b>$int</b> não é um inteiro válido";
                
            }

        ?>    

    </body>
</html>