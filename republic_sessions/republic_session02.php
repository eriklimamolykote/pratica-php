<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Tutorial's REpublic - PHP Session</title>

        <meta charset="utf-8">

    </head>
    
    <body>
        
        <?php

            // Iniciando a sessão
            session_start();

            // Armazenando dados da sessão
            $_SESSION[ "firstname" ] = "Erik";
            $_SESSION[ "lastname" ] = "Lima";

        ?>

    </body>

</html>