<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP - Classes E Objetos</title>
        <link rel="stylesheet" href="oop.css">
    </head>
    <body>
        
        <?php 

            // Definição de classe de inclusão
            require "republic_oop01.php";

            // Cria múltiplos objetos da classe Rectangle
            $obj1 = new Rectangle;
            $obj2 = new Rectangle;

            // Chama os métodos de ambos os objetos
            echo "<p id='info'>Área inicial do Objeto 1: " . $obj1 -> getArea() . "</p>"; // Saida: 0
            echo "<br>";
            echo "<p id='info'>Área inicial do Objeto 2: " . $obj2 -> getArea() . "</p>"; // Saída: 0
            echo "<br>";

            // Configura os valores de propriedades do $obj1
            $obj1 -> length = 30;
            $obj1 -> width = 20;

            // Configura os valores de propriedades do $obj2
            $obj2 -> length = 35;
            $obj2 -> width = 50;

            // Chama os método de ambos os objetos novamente
            echo "<p id='info'>Nova área do Objeto 1: " . $obj1 -> getArea() . "</p>"; // Saída: 600
            echo "<br>";
            echo "<p id='info'>Nova área do Objeto 2: " . $obj2 -> getArea() . "</p>"; // Saída: 1750
            echo "<br>";

        ?>

    </body>
</html>