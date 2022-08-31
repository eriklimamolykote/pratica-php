<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>PHP - Constantes Mágicas</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="./magic_constants.css">
    </head>
    <body>

    <h1 id = "title">PHP - Constantes Mágicas</h1>
        
        <?php

            echo "<p>Número da linha " . __LINE__ . "</p>"; // Exibe: Linha número 14
            echo "<p>Número da linha " . __LINE__ . "</p>"; // Exibe: Linha número 15
            echo "<p>Número da linha " . __LINE__ . "</p>"; // Exibe: Linha número 16

        ?>
    </body>
</html>