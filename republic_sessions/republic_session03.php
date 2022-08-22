<?php

    // Iniciando a sessão
    session_start();

    // Acessando daddos da sessão
    echo 'Hi, ' . $_SESSION[ "firstname" ] . ' ' . $_SESSION[ "lastname" ];

?>