<?php get_header(); ?>

<div id="fabricantes-lateral" class="grid_3">
    
    <div class="header-coluna">
        <h1>Fabricantes</h1>
    </div>

    <div class="marcas">

        <div class="box-marca-1">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-2">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-3">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-4">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-5">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-7">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

    </div> <!-- / marcas -->

</div> <!-- / fabricantes-lateral --> 

<div id="conteudo-central" class="grid_6">

    <div class="banner-central">
        <img src="<?php bloginfo('template_url'); ?>/imagens/banner-topo.jpg" alt="" />
    </div> <!-- / banner-topo-central -->

    <div class="destaques">

        <div class="header-coluna">
            <h1>Veja abaixo os produtos que são destaque:</h1>
        </div> <!-- / header-destaque -->

        <div class="boxes-central">
            

            <?php query_posts('posts_per_page=4&category_name=destaques'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( get_post_meta($post->ID, 'Imagem', true) ) : ?>

            <div class="box-central">
                
                <div class="imagem-box-central">
                
                    <img src="<?php echo get_post_meta($post->ID, 'Imagem', true) ?>" 
                         title="<?php the_title(); ?>" 
                         alt="<?php the_title(); ?>" />

                </div>

                <div class="descricao">
                    <p>
                        <?php echo get_the_title(); ?>
                    </p>

                    <p class="descricao-hide">
                        <a href="#">
                            <?php echo substr(get_the_content(), 0, 80); ?>
                        </a>
                    </p>
                </div>
            
                <?php endif; ?>
            <?php endwhile; else: ?>
            
            <?php endif; ?>

            </div>

        </div> <!-- / boxes-central -->

    </div> <!-- / destaques -->

    <div class="banner-central banner-inferior">
        <img src="<?php bloginfo('template_url'); ?>/imagens/banner-inferior.jpg" alt="" />
    </div> <!-- / banner-inferior-central -->

</div> <!-- / conteudo-central -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
