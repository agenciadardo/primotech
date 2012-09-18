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
        Com sua sede no Japão a Alps Electric é um dos maiores fabricantes
        de componentes eletrônicos do mundo. Seu portfólio é composto por
        switch, tact switch, potenciômetros, conectores, sensores, sintonizadores
        módulos de comunicação, mecanismo de impressão, módulos automotivos
        entre outros.
    </p>
</div>

<div class="header-categorias">
    <h1>Categorias</h1>
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