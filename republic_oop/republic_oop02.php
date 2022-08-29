<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP - Classes E Objetos</title>
        <link rel="stylesheet" href="oop.css">
    </head>
    <body>

        <h1 id = "php_title">PHP - Classes E Objetos</h1>
        
        <?php 

            // Definição de classe de inclusão
            require "republic_oop01.php";

            // Cria um novo objeto da classe Rectangle
            $obj = new Rectangle;

            // Obtém os valores de propriedades do objeto
            echo $obj -> length; // Saída: 0
            echo $obj -> width; // Saída: 0

            // Configura os valores de propriedades do objeto
            $obj -> length = 30;
            $obj -> width = 20;

            // Lê os valored de propriedades do objeto novamente para exibir a mudança
            echo $obj -> length; // Saída: 30
            echo $obj -> width; // Saída: 30

            // Chama os métodos de objeto
            echo $obj -> getPerimeter(); // Saída: 100
            echo $obj -> getArea(); // Saída: 600

        ?>

    </body>
</html>