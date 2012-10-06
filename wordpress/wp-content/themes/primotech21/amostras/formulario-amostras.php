<?php 
$theTitlePagina = preg_replace('[\s]', '-', strtolower(get_the_title()));
 ?>
<div class="logotipo-fabricantes grid_9">
    <div class="logotipo-<?php echo $theTitlePagina; ?>">
        <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-<?php echo $theTitlePagina, ".jpg"; ?>">
    </div>
</div>

<div class="boxes-amostras">
    <span>
        <p>
            Para solicitar sua amostra preencha os dados abaixo. É rápido 
            e prático. Após o envio aguarde o nosso contato!
        </p>
    </span>

    
    <div class="formulario-amostras">
        
    <?php if (empty($_GET['enviado'])) { ?>

        <form method="post" 
              action="<?php bloginfo('template_url') ?>/amostras/solicitar-amostras.php"
              id="formulario-amostras">

            <p class="validar-cliente"></p>
            <label for="textbox-cliente">Cliente: </label>
            <input type="text" value="" name="textbox-cliente" id="textbox-cliente" />

            <br />

            <p class="validar-projeto"></p>
            <label for="textbox-projeto">Projeto: </label>
            <input type="text" value="" name="textbox-projeto" id="textbox-projeto" />

            <br />

            <p class="validar-qtde-anual"></p>
            <label for="textbox-qtde-anual">Quantidade Anual: </label>
            <input type="text" value="" name="textbox-qtde-anual" id="textbox-qtde-anual" />

            <label for="textbox-sop">SOP: </label>
            <input type="text" value="" name="textbox-sop" id="textbox-sop" />

            <br />

            <p class="validar-aplicacao"></p>
            <label for="textbox-aplicacao">Aplicação: </label>
            <input type="text" value="" name="textbox-aplicacao" id="textbox-aplicacao" />

            <br />

            <p class="validar-telefone"></p>
            <label for="textbox-ddd">Telefone: </label>
            <input type="text" value="" name="textbox-ddd" id="textbox-ddd" />
            <input type="text" value="" name="textbox-telefone" id="textbox-telefone" />

            <br />

            <p class="validar-email"></p>
            <label for="textbox-email">E-mail: </label>
            <input type="text" value="" name="textbox-email" id="textbox-email" />

            <br />

            <p class="validar-mensagem"></p>
            <label for="textarea-mensagem">Mensagem: </label>
            <textarea name="textarea-mensagem" id="textarea-mensagem"></textarea>

            <br />

            <div class="botao-enviar grid_9">
                <input type="submit" name="botao-enviar" value="Enviar" />
            </div>

        </form>

        <?php 
        }
        else { ?>
        
            <h3 id="obrigado" style="text-align:center;">
                Requisição de amostra 
                <span style="font-style:italic;"><?php echo ucwords($theTitlePagina); ?></span> foi
                enviada com sucesso.<br />
                Obrigado!
            <h3>
        </p> 
        <?php } ?>

    </div>

</div>