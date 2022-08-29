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

                if ( $divisor == 0 ) {

                    trigger_error( "calcDivision(): O divisor não pode ser zero", E_USER_WARNING );
                    return false;

                } else {

                    return( $dividend / $divisor );

                }

            }

            function customError( $errno, $errstr, $errfile, $errline, $errcontext ) {

                $message = date( "d-m-Y H:i:s - " );
                $message .= "Erro: [" . $errno ."], " . "$errstr em $errfile na linha $errline, ";
                $message .= "Variáveis:" . print_r( $errcontext, true ) . "\r\n";

                error_log ( $message, 3, "logs/app_errors.log" );
                die( "Houve um problema. Por favor, tente novamente." );

            }

            set_error_handler( "customError" );
            echo calcDivision( 10, 0 );
            echo "Isto nunca será impresso.";

        ?>

    </body>
</html>