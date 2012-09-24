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

	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Listar os posts -->

	             <div class="post_conteudo"><!-- Post -->
	                <div class="post_textual">
	                    <div class="header-coluna">
	                        <h1>
	                        	<?php echo get_the_title(); ?>
	                        </h1>
	                    </div>

	                    <div class="texto_post_conteudo">
	                    	<small><?php echo get_the_date(); ?></small>
	                        <?php the_content() ?>
	                    </div>

	                    <div class="autor_post">
	                    	<p>
	                    		Publicado por <b><?php echo ucwords(get_the_author()); ?></b>
	                    	</p>
	                    </div>

	                </div>

	            </div><!-- endOf Post -->

	            <?php endwhile; else: ?>

	                <div class="post_conteudo grid_9"><!-- Post -->
	                    <p><?php _e('Desculpe, não existem postagens sobre esse assunto.'); ?></p>
	                </div><!-- endOf Post -->
	            
	            <?php endif; ?><!-- endOf Listar os posts -->

	            <div class="comentarios">
	            	<?php comments_template( '', true); ?>
	            </div>

</div> <!-- / conteudo-central -->

<?php get_footer(); ?>