<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP - Manipulação de erros</title>
        <link rel="stylesheet" href="error_handling.css">
    </head>
    <body>

        <h1 id = "error_h1">PHP - Manipulação de erros</h1>
        
        <?php 

            if ( file_exists( "sample.txt" ) ) {

                $file = fopen( "sample.txt", "r" );

            } else {

                die( "<p id='error_message'>Erro: O arquivo que você está tentando acessar não existe.</p>" );
                
            }

        ?>

    </body>
</html>