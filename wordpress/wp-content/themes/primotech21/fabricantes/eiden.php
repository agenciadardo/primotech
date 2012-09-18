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
        Fundada em 1964 no Japão, a Eiden desenvolveu de forma pioneira
        um gerador de sinal RF em estado sólido compacto para linhas de 
        fabricantes de TV e Broadcasters.<br />
        Sua linha de produtos oferece Geradores de RF para DTV (ISDB-T, DBV-S
        /S2, DVB-T/T2), gravadores e reprodutos digitais de sinais RF,
        amplificadores de RF para linhas de produção de aparelhos de TV
        entre outros.
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