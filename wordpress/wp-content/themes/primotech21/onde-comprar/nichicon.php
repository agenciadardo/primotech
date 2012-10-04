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
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-arrow-brasil.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>Arrow Brasil</p>
            <p>
                Rua José Gomes Falcão, 111<br />
                São Paulo - SP<br />
                CEP: 01139-010<br />
                Telefone: 55 (11) 3613-9300<br />
                Fax: 55 (11) 3613-9355
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: vendas@arrowbrasil.com<br />
                Site: www.arrowbrasil.com.br
            </p>
        </div>
    </div> <!-- / Box fabricante -->

    <div class="box-fabricante">
        <div class="logotipo-fabricante">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-future.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>Future - Campinas</p>
            <p>
                Rua Luzitana, 740 - 10º andar - Cjs. 103/104<br />
                Centro - Campinas - SP<br />
                CEP: 13015-121<br />
                Telefone: 55 (19) 3737-4100<br />
                Fax: 55 (19) 3236-9834
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: future.campinas@future.ca<br />
                Site: www.futureelectronics.com
            </p>
        </div>
    </div> <!-- / Box fabricante -->

    <div class="box-fabricante">
        <div class="logotipo-fabricante">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-future.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>Future - Porto Alegre</p>
            <p>
                Rua Ernesto da Fontoura, 1749/607<br />
                São Geraldo - Porto Alegre - RS<br />
                CEP: 90230-091<br />
                Telefone: 55 (51) 4009-4900<br />
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: future.portoalegre@future.ca<br />
                Site: www.futureelectronics.com
            </p>
        </div>
    </div> <!-- / Box fabricante -->

    <div class="box-fabricante">
        <div class="logotipo-fabricante">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-farnell-newark.jpg" alt="" />
        </div>

        <div class="endereco-fabricante">
            <p>Farnell-Newark</p>
            <p>
                Rua Emir Macedo Nogueira, 240<br />
                Jardim Ruyce - Diadema - SP<br />
                CEP: 09961-720<br />
                Telefone/Fax: 55 (11) 4066-9400
            </p>
        </div>

        <div class="contato-fabricante">
            <p>
                E-mail: sonaga@farnellnewark.com<br />
                Site: www.farnell.com
            </p>
        </div>
    </div> <!-- / Box fabricante -->


    <div class="botoes">
        <div class="box-faca-cotacao grid_5">
            <a href="<?php bloginfo('url') ?>/amostras/nichicon">
                <div class="botao-cotacao">
                    <p class="linha-1-cotacao">Solicite sua</p>
                    <p class="linha-2-cotacao">Amostra</p>
                </div>
            </a>
        </div>

        <div class="box-faca-cotacao grid_3">
            <a href="<?php bloginfo('url'); ?>/cotacao">
                <div class="botao-cotacao">
                    <p class="linha-1-cotacao">Faça uma</p>
                    <p class="linha-2-cotacao">Cotação</p>
                </div>
            </a>
        </div>
    </div> <!-- / Botões -->
</div>