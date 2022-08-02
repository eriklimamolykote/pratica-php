<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Galeria de Imagens Simples</title>
        <style type="text/css">

            .img-box {

                display: inline-block;
                text-align: center;
                margin: 0 15px;

            }

        </style>
    </head>
    <body>
        
        <?php
            // Vetor contendo nomes de amostras de arquivos de imagem
            $images = array( "kites.jpg", "balloons.jpg" );

            // Iteração através do vetor para criar a galeria de imagens
            foreach( $images as $image ) {

                echo '<div class="img-box">';
                    echo '<img src="images/' . $image . '" width="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '">';
                    echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
                echo '</div>';

            }

        ?>    

    </body>
</html>