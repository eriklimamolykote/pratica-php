<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>PHP - Análise JSON</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="./json_parsing.css">
    </head>
    <body>

    <h1 id = "title">PHP - Análise JSON</h1>
        
        <?php

            // Um vetor indexado
            $colors = array( "Vermelho", "Verde", "Azul", "Laranja", "Amarelo" );

            echo "<p id='json'>" . json_encode( $colors, JSON_FORCE_OBJECT ) . "</p>";

        ?>
    </body>
</html>