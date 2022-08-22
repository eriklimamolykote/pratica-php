<?php

    // Iniciando a sessão
    session_start();

    // Removendo dados da sessão
    if ( isset( $_SESSION[ "lastname" ] ) ) {

        unset( $_SESSION[ "lastname" ] );

    }

?>