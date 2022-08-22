<?php

    $to = 'user@youremail.com';
    $subject = 'Marriage Proposal';
    $from = 'anotheruser@youremail.com';

    // Para enviar correio HTML, o cabeçalho do tipo de conteúdo deve ser configurado
    $headers = 'MIME-version: 1.0' . "r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cria cabeçalhos de e-mail
    $headers .= 'From: ' .$from. "\r\n" .
        'Reply-to: ' .$from. "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compõe uma simples mensagem de correio HTML
    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;">Hi, girl!</h1>';
    $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
    $message .= '</body></html>';
    
    // Envia o e-mail
    if ( mail( $to, $subject, $message, $headers ) ) {

        echo 'Seu e-mail foi enviado com sucesso.';

    } else {

        echo 'Não foi possível enviar o e-mail. Por favor, tente novamente.';

    }

?>