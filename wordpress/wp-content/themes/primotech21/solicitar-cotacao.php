<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Enviando mensagem de <?php echo $_POST["textbox-empresa"]; ?></title>
        <?php

        if (PATH_SEPARATOR == ";") { 
            $quebraLinha = "\r\n";
        }
        else {
            $quebraLinha = "\n";
        }
                 
        $destinatario = "marcos.garcia@agenciadardo.com.br";
        $paginaOrigem = $_SERVER["HTTP_REFERER"];

        $empresa = $_POST["textbox-empresa"];
        $modelo = $_POST["textbox-modelo"];
        $email = $_POST["textbox-email"];
        $nome = $_POST["textbox-nome"];
        $numeroDDD = $_POST["textbox-ddd"];
        $numeroTelefone = $_POST["textbox-telefone"];
        $mensagem = $_POST["textarea-mensagem"];
        
        $conteudo = 
       '<p><b>Empresa:</b> ' . $empresa . '</p>
        <p><b>Modelo:</b> ' . $modelo . '</p>
        <p><b>E-mail:</b> '. $email . '</p>
        <p><b>Nome:</b> ' . $nome . '</p>
        <p><b>Telefone:</b> ' . $numeroDDD . ' ' . $numeroTelefone . '</p>
        <p><b>Mensagem:</b><pre> '. $mensagem . '</pre></p>';
        
        $assunto = "[Solicitação de cotação] " . $empresa;
        $headers .= "MIME-Version: 1.1" . $quebraLinha;
        $headers .= "Content-type: text/html; charset=utf-8" . $quebraLinha;
        $headers .= "From: " . $email . $quebraLinha;

        if(!mail($destinatario, $assunto, $conteudo, $headers , "-r" . $destinatario)) {
            mail($destinatario, $assunto, $conteudo, $headers);
        }

        echo "<meta http-equiv='refresh' content='0;url=" . $paginaOrigem . "?enviado=1#conteudo-central' />";

        ?>
    </head>
    <body>

    </body>
</html>