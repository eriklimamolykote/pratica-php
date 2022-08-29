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

            class Rectangle {

                // Declara propriedades
                public $length = 0;
                public $width = 0;

                // Método para obter o perímetro
                public function getPerimeter() {

                    return ( 2 * ( $this -> length + $this -> width ) );

                }

                // Método para obter a área
                public function getArea() {

                    return ( $this -> length * $this -> width );

                }

            }

        ?>

    </body>
</html>