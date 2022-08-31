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

            class MyClass {

                public function getClassName() {

                    return "<p id='class'>" . __CLASS__ . "</p>";
                    
                }

            }

            $obj = new MyClass();
            echo $obj -> getClassName(); // Exibe: MyClass

        ?>
    </body>
</html>