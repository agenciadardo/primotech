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
        Empresa norte americana fundada em 1983, a Aven fornece soluções 
        de inspeção óptica e suprimentos para a indústria eletroeletrônica.
        A Aven se destaca no segmento de ferramentas de precisão de alta
        performance para microscopia, inspeção e montagem de circuitos
        eletrônicos.
        Sua linha de produtos é composto por microscópios digitais portáteis,
        sistema de inspeção de vídeo, microscópio biológico, microscópio estéril
        e com zoom, acessórios, iluminação etc.
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