<?php

    // Executado em 18 de Janeiro de 2023
    $futureDate = mktime( 11, 07, 00, date( "m" )+30, date( "d" ), date( "Y" ) );
    echo date ("d/m/Y", $futureDate );

?>