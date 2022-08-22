<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Formulário de Contato</title>
    </head>
    <body>
        <h1>Obrigado!</h1>
        <p>Aqui está a informação que você enviou:</p>
        <ol>
            <li><em>Nome:</em> <?php echo $_POST[ "name" ]?></li>
            <li><em>E-mail:</em> <?php echo $_POST[ "email" ]?></li>
            <li><em>Assunto:</em> <?php echo $_POST[ "subject" ]?></li>
            <li><em>Message:</em> <?php echo $_POST[ "message" ]?></li>
        </ol>
    </body>
</html>