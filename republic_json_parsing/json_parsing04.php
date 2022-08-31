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

            // Armazena dados JSON numa variável PHP
            $json = '{"Erik":65, "Harry":80, "John":78, "Clark":90}';

            var_dump( json_decode( $json ) );

        ?>
    </body>
</html>