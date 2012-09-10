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
        <div class="icone-fabricantes"></div>
        <?php } ?>

        <?php if (is_page('onde-comprar')) { ?>
        <div class="icone-onde-comprar"></div>
        <?php } ?>
        
        <?php if (is_page('aplicacoes')) { ?>
        <div class="icone-aplicacoes"></div>
        <?php } ?>
        
        <?php if (is_page('primonews')) { ?>
        <div class="icone-primonews"></div>
        <?php } ?>
        
        <?php if (is_page('amostras')) { ?>
        <div class="icone-amostras"></div>
        <?php } ?>

        <?php if (is_page('fale-conosco')) { ?>
        <div class="icone-fale-conosco"></div>
        <?php } ?>

        <?php // Nomeia as páginas e subpáginas; ?>

            <?php 
            $idFabricantes = get_page_by_title('Fabricantes')->ID;
            $idOndeComprar = get_page_by_title('Onde comprar')->ID;
            $idAmostras = get_page_by_title('Amostras')->ID; 
            ?> 

            <?php if ($post->post_parent == $idFabricantes) { ?>
                <div class="icone-fabricantes"></div>
                <h1>Fabricantes</h1>
            <?php }
            elseif ($post->post_parent == $idOndeComprar) { ?>
                <div class="icone-onde-comprar"></div>
                <h1>Onde comprar</h1>
            <?php }
            elseif ($post->post_parent == $idAmostras) { ?>
                <div class="icone-amostras"></div>
                <h1>Amostras</h1>  
            <?php }
            else { ?>
                <h1><?php the_title(); ?></h1>
             <?php } ?>
    </div>

    <div class="conteudo-pagina">
        <div class="conteudo-<?php echo preg_replace('[\s]', '-', strtolower(get_the_title())); ?>">
            <?php the_content();?>
            
            <?php // Onde comprar; ?>
                <?php if (is_page('onde-comprar')) { ?>
                    <?php 
                    $idOndeComprar = get_page_by_title('Onde comprar')->ID;
                    $subpaginas = wp_list_pages('title_li=&child_of='.$idOndeComprar.'&echo=0&sort_column=post_date');
                    
                    if ($subpaginas) { ?>
                    <ul>                                
                        <?php echo $subpaginas; ?>
                    </ul>
                    <?php } ?>               
                <?php } ?>
                
            <?php // Includes para as subpáginas; ?>
                <?php 
                global $post; 
                $idFabricantes = get_page_by_title('Fabricantes')->ID;
                $idOndeComprar = get_page_by_title('Onde comprar')->ID;
                $idAmostras = get_page_by_title('Amostras')->ID;
                ?>

            <?php // Includes Fabricantes; ?>
                <?php if (is_page('alps') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/aven.php"; ?>
                <?php } ?>

            <?php // Includes Onde comprar; ?>
                <?php if (is_page('alps') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/aven.php"; ?>
                <?php } ?>

            <?php // Includes Amostras; ?>
                <?php if (is_page('alps') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/aven.php"; ?>
                <?php } ?>
        </div>
    </div>

</div> <!-- / conteudo-central -->

<?php get_footer(); ?>