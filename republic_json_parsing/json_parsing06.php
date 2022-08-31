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

            // Atribuindo string codificada em JSON a uma variável PHP
            $json = '{"Erik":65, "Harry":80, "John":78, "Clark":90}';

            // Decodifica dados JSON para um array PHP associativo
            $arr = json_decode( $json, true );

            // Acessa valores do array associativo
            echo $arr[ "Erik" ];
            echo $arr[ "Harry" ];
            echo $arr[ "John" ];
            echo $arr[ "Clark" ];

            // Decodifica dados JSON a um objeto PHP
            $obj = json_decode ( $json );

            // Acessa valores do objeto retornado
            echo $obj -> Erik;
            echo $obj -> Harry;
            echo $obj -> John;
            echo $obj -> Clark;

        ?>
    </body>
</html>