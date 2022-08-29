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

            // Função de manipulação de erro
            function customError( $errno, $errstr ) {

                echo "<b>Erro:</b> [ $errno ] $errstr";
                
            }

            // Configura o manipulador de erro
            set_error_handler( "customError" );

            // Dispara o erro
            echo( $test );

        ?>

    </body>
</html>