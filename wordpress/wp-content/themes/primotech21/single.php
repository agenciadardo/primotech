<?php get_header(); ?>

	    <div id="conteudo_post" class="grid_12 omega"><!-- Conteúdo -->

	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Listar os posts -->

	             <div class="post_conteudo grid_12"><!-- Post -->

	                <div class="post_textual grid_12">

	                    <div class="titulo_post_conteudo">
	                        <h1>
	                            <a href="<?php echo get_permalink(); ?>">
	                                <?php echo get_the_title(); ?>
	                            </a>
	                        </h1>
	                    </div>

	                    <div class="data_post">
	                    	<p>
	                    		<?php echo get_the_date(); ?>
	                    	</p>
	                    </div>

	                    <div class="texto_post_conteudo">
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

	            <div class="comentarios grid_12">
	            	<?php comments_template( '', true ); ?>
	            </div>

	    </div><!-- endOf Conteúdo -->

	</div><!-- endOf Container -->

<?php get_footer(); ?>
