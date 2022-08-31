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

            class Sample {

                public function myMethod() {

                    echo "<p id='method'>" . __METHOD__ . "</p>";

                }
                
            }

            $obj = new Sample();
            $obj -> myMethod(); // Exibe: Sample::myMethod

        ?>
    </body>
</html>