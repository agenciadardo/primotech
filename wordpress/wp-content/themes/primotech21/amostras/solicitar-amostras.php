<?php
    function fabricante() {
        return ucwords(basename($_SERVER['HTTP_REFERER']));
    }
 ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Enviando requisição de amostra &#8212; <?php echo fabricante(); ?></title>
        <?php

        if (PATH_SEPARATOR == ";") { 
            $quebraLinha = "\r\n";
        }
        else {
            $quebraLinha = "\n";
        }
                 
        $destinatario = "email@email.com.br";
        $paginaOrigem = $_SERVER["HTTP_REFERER"];
        $cliente = $_POST["textbox-cliente"];
        $projeto = $_POST["textbox-projeto"];
        $qtdeAnual = $_POST["textbox-qtde-anual"];
        $SOP = $_POST["textbox-sop"];
        $aplicacao = $_POST["textbox-aplicacao"];
        $numeroDDD = $_POST["textbox-ddd"];
        $numeroTelefone = $_POST["textbox-telefone"];
        $email = $_POST["textbox-email"];
        $mensagem = $_POST["textarea-mensagem"];
        
        $conteudo = 
       '<p><b>Cliente:</b> ' . $cliente . '</p>
        <p><b>Projeto:</b> '. $projeto . '</p>
        <p><b>Quantidade Anual:</b> ' . $qtdeAnual . '</p>
        <p><b>SOP:</b> ' . $SOP . '</p>
        <p><b>Aplicação:</b> ' . $aplicacao . '</p>
        <p><b>Telefone:</b> ' . $numeroDDD . ' ' . $numeroTelefone . '</p>
        <p><b>E-mail:</b> ' . $email . '</p>
        <p><b>Mensagem:</b><pre> '. $mensagem . '</pre></p>';

        $assunto = "[" . fabricante() . "] Requisição de amostra";
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