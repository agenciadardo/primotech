            <div id="comunicacao-lateral" class="grid_3">
                
                <div class="ultimas-noticias">
                    
                    <div class="header-coluna">
                        <h1>Últimas notícias</h1>
                    </div>

                    <div class="box-noticias">
                        <marquee behavior="scroll"
                                 scrollamount="1"
                                 direction="up" 
                                 height="220" 
                                 width="220">

                        <?php query_posts('posts_per_page=4&category_name=noticias'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                            <div class="noticia">
                                <p>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php echo "&raquo; ", the_title(); ?>
                                    </a>

                                    <br />

                                    <span>
                                        <?php echo substr(get_the_content(), 0, 100), ' (...)'; ?>
                                    </span>
                                </p>
                            </div>
                        
                        <?php endwhile; else: ?>
                            <div>
                                <p>Desculpe, não existem notícias publicadas ainda.</p>
                            </div>
                        <?php endif; ?>
                        </marquee>
                    </div> <!-- / box-noticias -->
                </div> <!-- / ultimas-noticias -->

                <div class="redes-sociais">

                    <div class="header-coluna">
                        <h1>Redes sociais</h1>
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
                        <div class="fb-like-box" 
                             data-href="http://www.facebook.com/facebook" 
                             data-width="220" 
                             data-height="260" 
                             data-show-faces="true" 
                             data-stream="false"
                             data-border-color="rgb(0,153,153)" 
                             data-header="false">
                        </div>
                    </div> <!-- / box-facebook -->

                </div> <!-- / redes-sociais -->
                
                <div class="cotacao">
                    
                    <div class="header-coluna">
                        <h1>Cotação do dólar</h1>
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
                                    echo '<div id="' . strtolower($tiposCotacao[$i]) . '"><p>' . $tiposCotacao[$i] . '</p> <span>' . $cotacao[$i] . ' </span>' . (floatval(str_replace(',', '.', $cotacao[$i])) > $cotacaoDia ? '<span class="marcador-up">&uarr;' : '<span class="marcador-down">&darr;') . '</span></div>';
                                }
                            ?>
                        </div>

                        <div class="data-cotacao">
                            <p>Atualizado: <span><?php echo date('d.m.Y'); ?></span></p>
                        </div>

                    </div> <!-- / box-cotacao -->
                </div> <!-- / cotacao -->

            </div> <!-- / comunicacao-lateral -->