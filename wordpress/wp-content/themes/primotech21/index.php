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

    <div class="videos">
        <object width="220" height="220">
            <param name="movie" value="https://www.youtube.com/v/videoseries?listType=playlist&list=PLne3FP-lG075EZqan23WRKWOJpNVnCTmf&autoplay=0&modestbranding=1&version=3"></param>
            <param name="allowFullScreen" value="true"></param>
            <param name="allowScriptAccess" value="always"></param>
            <embed src="https://www.youtube.com/v/videoseries?listType=playlist&list=PLne3FP-lG075EZqan23WRKWOJpNVnCTmf&autoplay=0&modestbranding=1&version=3" 
                   type="application/x-shockwave-flash" 
                   allowfullscreen="true" 
                   allowScriptAccess="always" 
                   width="220" 
                   height="220">
            </embed>
        </object>    
    </div>

</div> <!-- / fabricantes-lateral --> 

<div id="conteudo-central" class="grid_6">

    <div class="banner-central">
        <a href="<?php bloginfo('url'); ?>/fabricantes/alps">
            <img src="<?php bloginfo('template_url'); ?>/imagens/banner-topo.jpg" alt="" />
        </a>
    </div> <!-- / banner-topo-central -->

    <div class="destaques">

        <div class="header-coluna">
            <h1>Veja abaixo os produtos que são destaque:</h1>
        </div> <!-- / header-destaque -->

        <div class="boxes-central">
            

            <?php query_posts('posts_per_page=4&category_name=produtos'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( (get_post_meta($post->ID, 'Imagem', true)) && (get_post_meta($post->ID, 'Link', true)) ) : ?>

            <div class="box-central">
                
                <div class="imagem-box-central">
                
                    <img src="<?php echo get_post_meta($post->ID, 'Imagem', true) ?>" 
                         title="<?php the_title(); ?>" 
                         alt="<?php the_title(); ?>"
                         width="220"
                         height="200" />

                </div>

                <div class="descricao">
                    <p>
                        <?php echo substr(get_the_title(), 0, 50); ?>
                    </p>

                    <p class="descricao-hide">
                        <a href="<?php echo get_post_meta($post->ID, 'Link', true) ?>">
                            <?php echo substr(get_the_content(), 0, 70); ?>
                        </a>
                    </p>
                </div>

            </div>
                <?php endif; ?>
            <?php endwhile; else: ?>
            
            <?php endif; ?>


        </div> <!-- / boxes-central -->

    </div> <!-- / destaques -->

    <div class="banner-central banner-inferior">
        <a target="_blank" href="<?php bloginfo('template_url'); ?>/recursos/linecard-primotech21-2012.pdf">
            <img src="<?php bloginfo('template_url'); ?>/imagens/banner-inferior.jpg" alt="" />
        </a>
    </div> <!-- / banner-inferior-central -->

</div> <!-- / conteudo-central -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
