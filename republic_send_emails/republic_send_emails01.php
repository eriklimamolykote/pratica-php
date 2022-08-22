<?php

    $to = 'user@youremail.com';
    $subject = 'Marriage Proposal';
    $message = 'Hi, girl. Will you marry me?';
    $from = 'anotheruser@youremail.com';

    // Enviando e-mail
    if ( mail( $to, $subject, $message ) ) {

        echo 'Seu e-mail foi enviado com sucesso.';
    } else {

        echo 'Não foi possível enviar o e-mail. Por favor, tente novamente.';

    }

?>