<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Formulário de Contato</title>
    </head>
    <body>
        <h2>Contate-nos</h2>
        <p id="one">Por favor, preencha este formulário e nos envie.</p>
        <form action="process-form.php" method="post">
            <p>
                <label for="inputName">Nome:<sup>*</sup></label>
                <input type="text" name="name" id="inputName">
            </p>
            <p>
                <label for="inputEmail">E-mail:<sup>*</sup></label>
                <input type="text" name="email" id="inputEmail">
            </p>
            <p>
                <label for="inputSubject">Subject:</label>
                <input type="text" name="subject" id="inputSubject">
            </p>
            <p>
                <label for="inputComment">Message:<sup>*</sup></label>
                <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
            </p>
            <input id="botaoEnviar" type="submit" value="Enviar">
            <input id="botaoLimpar" type="reset" value="Limpar">
        </form>
    </body>
</html>