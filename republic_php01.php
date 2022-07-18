<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Exemplo do método PHP GET</title>

    </head>

    <body>

        <?php

            if ( isset( $_GET[ "name" ] ) ) {

                echo "<p>Oi, " . $_GET[ "name" ] . "</p>";

            }

        ?>

        <form method="get" action = "<?php echo $_SERVER[ "PHP_SELF" ];?>">

            <label for="inputName">Nome:</label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="Enviar">

        </form>    

    </body>

</html>