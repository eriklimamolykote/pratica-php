<?php

    // Configurando um cookie
    setcookie( "username", "Erik Lima", time()+30*24*60*60 );

    // Acessando um valor de cookie individual
    echo $_COOKIE[ "username" ];

    // Verifica se um cookie está configurado ou não
    if ( isset( $_COOKIE[ "username" ] ) ) {

        echo "Hi " . $_COOKIE[ "username" ];

    } else {

        echo "Bem vindo(a), visitante!";

    }

?>