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

                public function getNamespace() {

                    return "<p id='namespace'>" . __NAMESPACE__ . "</p>";

                }

            }

            $obj = new MyClass();
            echo $obj -> getNamespace(); // Exibe: MyNamespace

        ?>
    </body>
</html>