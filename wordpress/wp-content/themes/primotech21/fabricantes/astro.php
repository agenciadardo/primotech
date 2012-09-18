<?php 
$theTitlePagina = preg_replace('[\s]', '-', strtolower(get_the_title()));
 ?>

<div class="header-aplicacoes">
    
    <div class="logotipo-fabricantes grid_9">
        <div class="logotipo-<?php echo $theTitlePagina; ?>">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-<?php echo $theTitlePagina, ".jpg"; ?>">
        </div>
    </div>

    <p>
        A Astro Design se destaca como um dos principais fornecedores de equipamentos
        de teste para indústria de áudio e vídeo. Sua linha de produtos inclui monitores
        de forma de onda e vetor, monitores de áudio <i>embedded</i> e geradoras de sinais
        HD-SDI e 3G-SDI, geradores de sinais digitais e analisadores HDMI para a linha de
        produção de aparelhos de TV, DVD, BD e <i>receiver</i> HI-FI.
    </p>
</div>

<div class="lista-categorias">

</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="#">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Saiba onde</p>
                <p class="linha-2-cotacao">Comprar</p>
            </div>
        </a>
    </div>

    <div class="box-faca-cotacao grid_3">
        <a href="#">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Faça uma</p>
                <p class="linha-2-cotacao">Cotação</p>
            </div>
        </a>
    </div>
</div> <!-- / Botões -->