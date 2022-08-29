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

            function calcDivision( $dividend, $divisor ) {

                if  ($divisor == 0 ) {

                    trigger_error( "<p id='error_message'>O divisor não pode ser zero</p>", E_USER_WARNING );
                    return false;

                } else {

                    return( $dividend / $divisor );

                }

            }

            // Chamando a função
            echo calcDivision( 10, 0 );

        ?>

    </body>
</html>