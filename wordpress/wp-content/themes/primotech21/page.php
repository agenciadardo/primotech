<?php get_header(); ?>

<div id="fabricantes-lateral" class="grid_3">
    
    <div class="header-coluna">
        <h1>Fabricantes</h1>
    </div>

    <div class="marcas">

        <div class="box-marca-1">
            <a href="<?php bloginfo('url'); ?>/fabricantes/alps">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-2">
            <a href="<?php bloginfo('url'); ?>/fabricantes/nichicon">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-3">
            <a href="<?php bloginfo('url'); ?>/fabricantes/torex">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-4">
            <a href="<?php bloginfo('url'); ?>/fabricantes/astro">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-5">
            <a href="<?php bloginfo('url'); ?>/fabricantes/eiden">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-7">
            <a href="<?php bloginfo('url'); ?>/fabricantes/aven">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

    </div> <!-- / marcas -->

</div> <!-- / fabricantes-lateral --> 

<div id="conteudo-central" class="grid_9">



    <div class="header-paginas">

        <?php if (is_page('fabricantes')) { ?>
        <div class="icone-fabricantes">

        </div>
        <?php } ?>

        <?php if (is_page('onde-comprar')) { ?>
        <div class="icone-onde-comprar">

        </div>
        <?php } ?>
        
        <?php if (is_page('aplicacoes')) { ?>
        <div class="icone-aplicacoes">

        </div>
        <?php } ?>
        
        <?php if (is_page('primonews')) { ?>
        <div class="icone-primonews">

        </div>
        <?php } ?>
        
        <?php if (is_page('amostras')) { ?>
        <div class="icone-amostras">

        </div>
        <?php } ?>

        <?php if (is_page('fale-conosco')) { ?>
        <div class="icone-fale-conosco">

        </div>
        <?php } ?>

        <h1><?php the_title(); ?></h1>
    </div>

    <div class="conteudo-pagina">
        <?php the_content(); ?>
    </div>

</div> <!-- / conteudo-central -->

<?php get_footer(); ?>