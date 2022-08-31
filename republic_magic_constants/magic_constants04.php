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

            function myFunction() {

                echo "<p id='function'>O nome da função é - " . __FUNCTION__ . "</p>";

            }
            
            myFunction(); // Exibe: O nome da função é - myFunction

        ?>
    </body>
</html>