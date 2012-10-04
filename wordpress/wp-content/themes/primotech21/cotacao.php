<?php
function fabricante() {
    return ucwords(basename($_SERVER['HTTP_REFERER']));
}
?>

<?php if (empty($_GET['enviado'])) { ?>
    <div class="logotipo-fabricantes grid_9">
        <div class="logotipo-<?php echo strtolower(fabricante()); ?>">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-<?php echo fabricante(), ".jpg"; ?>">
        </div>
    </div>

    <div class="header-fale-conosco">
        <p>Preencha o formulário abaixo e faça a sua cotação:</p>
    </div>

    <div class="formulario-fale-conosco">

            <form method="post" 
                  action="<?php bloginfo('template_url') ?>/solicitar-cotacao.php"
                  id="formulario-fale-conosco">

                <p class="validar-empresa"></p>
                <label for="textbox-empresa">Empresa: </label>
                <input type="text" value="&nbsp;" name="textbox-empresa" id="textbox-empresa" />

                <br />

                <p class="validar-modelo"></p>
                <label for="textbox-modelo">Modelo: </label>
                <input type="text" value="&nbsp;" name="textbox-modelo" id="textbox-modelo" />

                <br />

                <p class="validar-email"></p>
                <label for="textbox-email">E-mail: </label>
                <input type="text" value="&nbsp;" name="textbox-email" id="textbox-email" />

                <br />

                <p class="validar-nome"></p>
                <label for="textbox-nome">Nome: </label>
                <input type="text" value="&nbsp;" name="textbox-nome" id="textbox-nome" />

                <br />

                <p class="validar-telefone"></p>
                <label for="textbox-ddd">Telefone: </label>
                <input type="text" value="&nbsp;" name="textbox-ddd" id="textbox-ddd" />
                <input type="text" value="&nbsp;" name="textbox-telefone" id="textbox-telefone" />

                <br />

                <p class="validar-mensagem"></p>
                <label for="textarea-mensagem">Mensagem: </label>
                <textarea name="textarea-mensagem" id="textarea-mensagem"></textarea>

                <br />

                <div class="botao-enviar grid_9">
                    <input type="submit" name="botao-enviar" value="Enviar" />
                </div>

            </form>
    </div> <!-- / Formulário Fale Conosco -->
 <?php 
 }
 else { ?>
     <h3 id="obrigado" style="text-align:center;">
         Mensagem enviada com sucesso.<br />
         Obrigado!
     </h3>
<?php } ?>