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
            Para conhecer o trabalho desenvolvido pela 
            marca <?php the_title(); ?>, preencha o formulário e 
            solicite uma amostra dos seus componentes eletrônicos:
        </p>
    </span>

    <div class="formulario-amostras">
        <form method="post" action="../solicitar-amostras-nichicon.php">
            <span class="validar-cliente"></span>
            <label for="textbox-cliente">Cliente: </label>
            <input type="text" name="textbox-cliente" id="textbox-cliente" />

            <br />

            <span class="validar-projeto"></span>
            <label for="textbox-projeto">Projeto: </label>
            <input type="text" name="textbox-projeto" id="textbox-projeto" />

            <br />

            <span class="validar-qtde-anual"></span>
            <label for="textbox-qtde-anual">Quantidade Anual: </label>
            <input type="text" name="textbox-qtde-anual" id="textbox-qtde-anual" />

            <span class="validar-sop"></span>
            <label for="textbox-sop">SOP: </label>
            <input type="text" name="textbox-sop" id="textbox-sop" />

            <br />

            <span class="validar-aplicacao"></span>
            <label for="textbox-aplicacao">Aplicação: </label>
            <input type="text" name="textbox-aplicacao" id="textbox-aplicacao" />

            <br />

            <span class="validar-telefone"></span>
            <label for="textbox-ddd">Telefone: </label>
            <input type="text" name="textbox-ddd" id="textbox-ddd" />
            <input type="text" name="textbox-telefone" id="textbox-telefone" />

            <br />

            <span class="validar-email"></span>
            <label for="textbox-email">E-mail: </label>
            <input type="text" name="textbox-email" id="textbox-email" />

            <br />

            <span class="validar-email">Mensagem: </span>
            <textarea></textarea>

            <br />

            <div class="botao-enviar grid_9">
                <input type="submit" name="botao-enviar" value="Enviar" />
            </div>

        </form>
    </div>
    
</div>