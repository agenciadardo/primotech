<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>P&eacute;rola Neggra</title>
        <?php

        $pagina_origem = $_SERVER['HTTP_REFERER'];
        $nome = htmlspecialchars($_POST['textbox_nome']);
        $email = htmlspecialchars($_POST['textbox_email']);
        $telefone = htmlspecialchars($_POST['textbox_telefone']);
        $mensagem = htmlspecialchars($_POST['textarea_mensagem']);
        $data_atual = date('d/m/Y H:i:s');

        $header = "ENVIADO POR: " . $nome . " <" . $email . "> \r\n";
        $conteudo = "NOME: " . $nome . "\n";
        $conteudo .= "E-MAIL: " . $email . "\n";
        $conteudo .= "TELEFONE: " . $telefone . "\n\n";
        $conteudo .= "MENSAGEM:\n\n " . $mensagem;
        $assunto = "Pérola Neggra - Contato " . $data_atual;

        $destinatario = "marckfree@gmail.com";
        $destinatario = explode(",", $destinatario);
        $destinatario_qtd = count($destinatario);

        for($i = 0; $i < $destinatario_qtd; $i += 1) {
            $destino = trim($destinatario[$i]);
            $enviado = mail($destino, $assunto, $conteudo, $header);
        }

        if ($enviado) {
            echo "<meta http-equiv='refresh' content='0;url=" . $pagina_origem . "?enviado=1#formulario-contato' />";
        }
        ?>
    </head>
    <body>
    </body>
</html>