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

    <div class="ultimas-noticias alpha grid_5 omega">

        <div class="header-coluna">
            <h1>ÚLTIMAS NOTÍCIAS</h1>
        </div>

        <div class="box-noticias-primonews">
            
            <?php query_posts('posts_per_page=4&category_name=Noticias'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="noticia-primonews">

                <div class="header-noticia-primonews">
                    <h1>
                        <?php echo substr(get_the_title(), 0, 35), "..."; ?>
                    </h1>
                </div>
                
                <div class="resumo-noticia">
                    <p>
                        <?php echo substr(get_the_content(), 0, 180), "..."; ?>
                    </p>
                </div>

                <div class="botao-leia-mais">
                    <p><a href="<?php the_permalink(); ?>"><span>+</span> Leia mais</a></p>
                </div>
            </div>
            <?php endwhile; else: ?>
                <div>
                    <p><?php _e('Desculpe, não existem notícias publicadas ainda.'); ?></p>
                </div>
            <?php endif; ?>

        </div> <!-- / box-noticias -->
    </div> <!-- / ultimas-noticias -->

    <div class="box-cinza-primonews grid_4 omega">
        <div class="box-redes-sociais-primonews">
            <div class="redes-sociais">

                <div class="header-coluna-cinza">
                    <h1>REDES SOCIAIS</h1>
                </div>

                <div class="lista-icones">
                    <div class="icone-social">
                        <a href="http://pt-br.facebook.com/people/Primotech-Brasil/100004511493884">
                            <img class="icone-facebook" src="<?php bloginfo('template_url'); ?>/imagens/sprite-social.png" alt="" />
                        </a>
                    </div>

                    <div class="icone-social">
                        <a href="#">
                            <img class="icone-twitter" src="<?php bloginfo('template_url'); ?>/imagens/sprite-social.png" alt="" />
                        </a>
                    </div>

                    <div class="icone-social">
                        <a href="#">
                            <img class="icone-linkedin" src="<?php bloginfo('template_url'); ?>/imagens/sprite-social.png" alt="" />
                        </a>
                    </div>

                    <div class="icone-social">
                        <a href="#">
                            <img class="icone-email" src="<?php bloginfo('template_url'); ?>/imagens/sprite-social.png" alt="" />
                        </a>
                    </div>

                </div> <!-- / lista-icones -->

                <div class="box-facebook">
                    <div class="fb-like-box facebook-primonews" 
                         data-href="http://www.facebook.com/facebook" 
                         data-width="270" 
                         data-height="260" 
                         data-show-faces="true" 
                         data-stream="false"
                         data-border-color="rgb(0,153,153)" 
                         data-header="false">
                    </div>
                </div> <!-- / box-facebook -->

            </div> <!-- / redes-sociais -->

                    <div class="box-cotacao-primonews">
            <div class="header-coluna-cinza">
                <h1>COTAÇÃO DO DÓLAR</h1>
            </div>

                <div class="box-cotacao">
                    <div class="header-em-reais">
                        <p><span>em R$</span></p>
                    </div>

                    <div class="display-cotacao">
                        <?php
                            include "obterCotacaoDolar.php";

                            $cotacao = obterCotacaoDolar();
                            $cotacaoDia = floatval(str_replace(',', '.', obterCotacaoDolarDia()));
                            $tiposCotacao = Array("Compra", "Venda");
                                                            
                            for ($i = 0; $i < count($cotacao); $i += 1) {
                                echo '<div id="' . strtolower($tiposCotacao[$i]) . '"><p>' . $tiposCotacao[$i] . '</p> <span>' . (strlen($cotacao[$i]) < 6 ? $cotacao[$i] . $cotacao[$i][4] : $cotacao[$i]) . ' </span>' . (floatval(str_replace(',', '.', $cotacao[$i])) > $cotacaoDia ? '<span class="marcador-up">&uarr;' : '<span class="marcador-down">&darr;') . '</span></div>';
                            }
                        ?>
                    </div>

                    <div class="data-cotacao">
                        <p>Atualizado: <span><?php echo date('d.m.Y'); ?></span></p>
                    </div>

                </div> <!-- / box-cotacao -->
            </div>
        </div>
    </div>