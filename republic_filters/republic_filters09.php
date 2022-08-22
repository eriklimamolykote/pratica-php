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
            $int = 75;

            // Valida amostra de valor inteiro
            if ( filter_var( $int, FILTER_VALIDATE_INT, array( "options" => array( "min_range" => 0, "max_range" => 100 ) ) ) ) {

                echo "<b>$int</b> está dentro do intervalo de 0 a 100";

            } else {

                "<b>$int</b><b id='not>não</b> está dentro do intervalo de 0 a 100";
                
            }

        ?>    

    </body>
</html>