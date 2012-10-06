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


<div class="boxes-categorias">
    <?php 
        $linksCategorias1 = array(
            link1 => "http://aventools.thomasnet-navigator.com/viewitems/digital-microscopes/mighty-scope-hand-held-digital-microscopes?",
            link2 => "http://aventools.thomasnet-navigator.com/viewitems/digital-microscopes/-and-shop-microscopes-digital-microscopes-zipscope?",
            link3 => "http://aventools.thomasnet-navigator.com/item/digital-microscopes/iloupe-xl-hand-held-portable-microscopes/26700-520?",
            link4 => "http://aventools.thomasnet-navigator.com/viewitems/-hand-held-and-shop-microscopes-pocket-microscopes/copes-shop-microscopes-pen-type-pocket-microscopes?",
            link5 => "http://aventools.thomasnet-navigator.com/viewitems/-hand-held-and-shop-microscopes-pocket-microscopes/op-microscopes-shop-microscopes-pocket-microscopes?"
        );

        $linksCategorias2 = array(
            link1 => "http://aventools.thomasnet-navigator.com/category/create-your-own-video-inspection-system",
            link2 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/ivue-advanced-video-inspection-systems?",
            link3 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/iscope-microscopes-and-video-inspection-systems?",
            link4 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/vis-745-video-inspection-systems?",
            link5 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/vis-750-microscope-based-video-inspection-systems?",
            link6 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/macro-zoom-video-inspection-systems?",
            link7 => "http://aventools.thomasnet-navigator.com/viewitems/video-inspection-systems/ection-systems-micro-zoom-video-inspection-systems?"
        );
     ?>
    <div class="box-categoria">
        <div class="header-box-categoria">
            <p class="titulo-maior">Digital Hand Held and Pocket Microscopes</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/microscope-inspection.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias1[link1]; ?>">Mighty Scope Hand-Held Digital Microscopes</a></li>
                <li><a href="<?php echo $linksCategorias1[link2]; ?>">zipScope</a></li>
                <li><a href="<?php echo $linksCategorias1[link3]; ?>">iLoupe XL2 Hand-Held Portable Microscopes</a></li>
                <li><a href="<?php echo $linksCategorias1[link4]; ?>">Pen Type Pocket Microscopes</a></li>
                <li><a href="<?php echo $linksCategorias1[link5]; ?>">Pocket Microscopes</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

    <div class="box-categoria">
        <div class="header-box-categoria">
            <p class="titulo-maior">Video Inspection Systems</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/video-inspection.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias2[link1]; ?>">Create Your Own Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link2]; ?>">iVue Advanced Video Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link3]; ?>">iScope Microscopes and Video Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link4]; ?>">VIS-764 Video Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link5]; ?>">VIS-750 Microscopes Based Video Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link6]; ?>">Macro Zoom Video Inspection Systems</a></li>
                <li><a href="<?php echo $linksCategorias2[link7]; ?>">Micro Zoom Video Inspection Systems</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

</div> <!-- / Boxes Categorias -->

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url') ?>/onde-comprar/aven">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Saiba onde</p>
                <p class="linha-2-cotacao">Comprar</p>
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