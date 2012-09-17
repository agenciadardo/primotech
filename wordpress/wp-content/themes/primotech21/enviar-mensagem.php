<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Enviando mensagem de <?php echo $_POST["textbox-nome"]; ?></title>
        <?php

        if (PATH_SEPARATOR == ";") { 
            $quebraLinha = "\r\n";
        }
        else {
            $quebraLinha = "\n";
        }
                 
        $destinatario = "email@email.com.br";
        $paginaOrigem = $_SERVER["HTTP_REFERER"];

        $nome = $_POST["textbox-nome"];
        $email = $_POST["textbox-email"];
        $numeroDDD = $_POST["textbox-ddd"];
        $numeroTelefone = $_POST["textbox-telefone"];
        $empresa = $_POST["textbox-empresa"];
        $endereco = $_POST["textbox-endereco"];
        $CEP = $_POST["textbox-cep"];
        $cidade = $_POST["textbox-cidade"];
        $estado = $_POST["textbox-estado"];
        $mensagem = $_POST["textarea-mensagem"];
        
        $conteudo = 
       '<p><b>Nome:</b> ' . $nome . '</p>
        <p><b>E-mail:</b> '. $email . '</p>
        <p><b>Telefone:</b> ' . $numeroDDD . ' ' . $numeroTelefone . '</p>
        <p><b>Empresa:</b> ' . $empresa . '</p>
        <p><b>Endereço:</b> ' . $endereco . ' - ' . $CEP . '</p>
        <p><b>Cidade:</b> ' . $cidade . ' - ' . $estado . '</p>
        <p><b>Mensagem:</b><pre> '. $mensagem . '</pre></p>';
        
        $assunto = "[Fale Conosco] Mensagem";
        $headers .= "MIME-Version: 1.1" . $quebraLinha;
        $headers .= "Content-type: text/html; charset=utf-8" . $quebraLinha;
        $headers .= "From: " . $destinatario . $quebraLinha;

        if(!mail($destinatario, $assunto, $conteudo, $headers , "-r" . $destinatario)) {
            mail($destinatario, $assunto, $conteudo, $headers);
        }

        echo "<meta http-equiv='refresh' content='0;url=" . $paginaOrigem . "?enviado=1#conteudo-central' />";

        ?>
    </head>
    <body>

    </body>
</html>