<div class="header-coluna">
    <h1>EM DESTAQUE</h1>
</div>

<div class="boxes-em-destaque alpha grid_9">
    <div class="box-em-destaque-maior alpha grid_5">
        
        <?php query_posts('posts_per_page=1&category_name=destaques'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if ( get_post_meta($post->ID, 'Imagem', true) ) : ?>

                    <div class="box-central-primonews-grande">
                        
                        <div class="imagem-box-central-primonews-grande">
                        
                            <img src="<?php echo get_post_meta($post->ID, 'Imagem', true) ?>" 
                                 title="<?php the_title(); ?>" 
                                 alt="<?php the_title(); ?>"
                                 width="220"
                                 height="200" />

                        </div>

                        <div class="descricao-primonews-grande">
                            <p>
                                <?php echo substr(get_the_title(), 0, 100); ?>
                            </p>
                        </div>

                        <div class="resumo-primonews-grande">
                            <p>
                                <?php echo substr(get_the_content(), 0, 200) . '...'; ?>
                            </p>
                        </div>

                        <div class="botao-leia-mais">
                            <p><a href="<?php the_permalink(); ?>"><span>+</span> Leia mais</a></p>
                        </div>

                    </div>
                        <?php endif; ?>
                    <?php endwhile; else: ?>
                    
                    <?php endif; ?>

    </div>

    <div class="box-em-destaque-menor alpha grid_4">
        <?php query_posts('posts_per_page=1&category_name=destaques&offset=1'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if ( get_post_meta($post->ID, 'Imagem', true) ) : ?>

                    <div class="box-central-primonews-peq">
                        
                        <div class="imagem-box-central-primonews-peq">
                        
                            <img src="<?php echo get_post_meta($post->ID, 'Imagem', true) ?>" 
                                 title="<?php the_title(); ?>" 
                                 alt="<?php the_title(); ?>"
                                 width="220"
                                 height="200" />

                        </div>

                        <div class="descricao-primonews-peq">
                            <p>
                                <?php echo substr(get_the_title(), 0, 100); ?>
                            </p>
                        </div>

                        <div class="resumo-primonews-peq">
                            <p>
                                <?php echo substr(get_the_content(), 0, 200) . '...'; ?>
                            </p>
                        </div>

                        <div class="botao-leia-mais">
                            <p><a href="<?php the_permalink(); ?>"><span>+</span> Leia mais</a></p>
                        </div>

                    </div>
                        <?php endif; ?>
                    <?php endwhile; else: ?>
                    
                    <?php endif; ?>
    </div> <!-- / Notícia Menor -->
</div>

<div class="ultimas-noticias grid_5">
    <div class="header-coluna">
        <h1>Últimas notícias</h1>
    </div>
</div>