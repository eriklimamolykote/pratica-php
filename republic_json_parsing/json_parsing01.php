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

            // Um vetor associativo
            $marks = array( "Erik" => 38, "Harry" => 80, "John" => 78, "Clark" => 90 );

            echo "<p id='json'>" . json_encode( $marks ) . "</p>";

        ?>
    </body>
</html>