<?php 
$theTitlePagina = preg_replace('[\s]', '-', strtolower(get_the_title()));
 ?>
<div class="logotipo-fabricantes grid_9">
    <div class="logotipo-<?php echo $theTitlePagina; ?>">
        <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-<?php echo $theTitlePagina, ".jpg"; ?>">
    </div>
</div>

<div class="boxes-fabricantes">
    <span><p>Distribuidores da <?php the_title(); ?> no Brasil:</p></span>

    <div class="box-fabricante">
        <div class="logotipo-fabricante">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-avnet.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>AVNET</p>
            <p>
                Rua Surubim, 504 - 7º andar<br />
                Conjunto 71 - Brooklin - São Paulo<br />
                CEP: 04571-050<br />
                Telefone: 55 (11) 5079-2150<br />
                Fax: 55 (11) 5079-2160
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: vendas@avnet.com<br />
                Site: www.avnetexpress.com
            </p>
        </div>
    </div> <!-- / Box fabricante -->

    <div class="box-fabricante">
        <div class="logotipo-fabricante">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-p21.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>P21</p>
            <p>
                Rua da Glória, 157 - 7º andar<br />
                Liberdade - São Paulo<br />
                CEP: 04571-050<br />
                Telefone: 55 (11) 3248-4100<br />
                Fax: 55 (11) 3248-5110
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: vendas@p21.com<br />
                Site: www.p21.com.br
            </p>
        </div>
    </div> <!-- / Box fabricante -->

    <div class="box-faca-cotacao grid_9">
        <a href="#">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Faça uma</p>
                <p class="linha-2-cotacao">Cotação</p>
            </div>
        </a>
    </div>
</div>