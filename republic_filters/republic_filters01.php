<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP - Filtros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php

            // Amostra de comentário do usuário
            $comment = "<h1>Alô, você! Como está indo hoje?</h1>";

            // Sanitiza e imprime string de comentário
            $sanitizedComment = filter_var( $comment, FILTER_SANITIZE_STRING );
            echo $sanitizedComment;

        ?>

    </body>
</html>