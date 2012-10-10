            <div id="comunicacao-lateral" class="grid_3">
                
                <div class="ultimas-noticias">
                    
                    <div class="header-coluna">
                        <h1>Últimas notícias</h1>
                    </div>

                    <div class="box-noticias">
                        <?php query_posts('posts_per_page=4&category_name=noticias'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                            <div class="noticia">
                                <p>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php 
                                            if ( strlen(get_the_title()) <= 30 ) {
                                                echo '&raquo; ', get_the_title();
                                            }
                                            else {
                                                echo '&raquo; ',substr(get_the_title(), 0, 26), ' (...)';
                                            }
                                        ?>
                                    </a>
                                </p>
                            </div>
                        
                        <?php endwhile; else: ?>
                            <div>
                                <p>Desculpe, não existem notícias publicadas ainda.</p>
                            </div>
                        <?php endif; ?>
                    </div> <!-- / box-noticias -->
                </div> <!-- / ultimas-noticias -->
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
                             data-height="183" 
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
                        <div class="data-cotacao">
                            <p><span><?php echo date('d/m/Y'); ?></span></p>
                        </div>

                        <div class="header-em-reais">
                            <p><span>em R$</span></p>
                        </div>

                        <div class="display-cotacao">
                            <?php
                                include "obterCotacaoDolar.php";
                                
                                $cotacao = obterCotacaoDolar();
                                $tiposCotacao = Array("Compra", "Venda");
                                
                                for ($i = 0; $i < count($cotacao); $i += 1) {
                                    echo '<p class="' . strtolower($tiposCotacao[$i]) . '"><span>' . $tiposCotacao[$i] . ': </span>' . $cotacao[$i] . '</p>';
                                }
                            ?>
                        </div>
                    </div> <!-- / box-cotacao -->
                </div> <!-- / cotacao -->

            </div> <!-- / comunicacao-lateral -->