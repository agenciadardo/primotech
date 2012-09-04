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
                                
                                <?php echo substr(get_the_content(), 0, 75), "..."; ?>

                                <span>
                                    <a href="<?php echo get_permalink(); ?>">
                                        Leia mais
                                    </a>
                                </span>

                            </p>
                        </div>
                        <?php endwhile; else: ?>
                            <div>
                                <p><?php _e('Desculpe, não existem notícias publicadas ainda.'); ?></p>
                            </div>
                        <?php endif; ?>

                    </div> <!-- / box-noticias -->
                    
                    <script type="text/javascript">
                            Noticias.scroll();
                    </script>


                </div> <!-- / ultimas-noticias -->

                <div class="videos">
<!--                     <object width="220" height="220">
                        <param name="movie" value="https://www.youtube.com/v/videoseries?listType=playlist&list=ALYL4kY05133ohSYUqR_phVX8cJdxXbe5_&autoplay=1&modestbranding=1&version=3"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <param name="allowScriptAccess" value="always"></param>
                        <embed src="https://www.youtube.com/v/videoseries?listType=playlist&list=ALYL4kY05133ohSYUqR_phVX8cJdxXbe5_&autoplay=1&modestbranding=1&version=3" 
                               type="application/x-shockwave-flash" 
                               allowfullscreen="true" 
                               allowScriptAccess="always" 
                               width="220" 
                               height="220">
                        </embed>
                    </object>   -->  
                </div>

                <div class="redes-sociais">

                    <div class="header-coluna">
                        <h1>Redes sociais</h1>
                    </div>

                    <div class="lista-icones">
                        <div class="icone-social">
                            <a href="#">
                                <img class="icone-facebook" src="imagens/sprite-social.png" alt="" />
                            </a>
                        </div>

                        <div class="icone-social">
                            <a href="#">
                                <img class="icone-twitter" src="imagens/sprite-social.png" alt="" />
                            </a>
                        </div>

                        <div class="icone-social">
                            <a href="#">
                                <img class="icone-linkedin" src="imagens/sprite-social.png" alt="" />
                            </a>
                        </div>

                        <div class="icone-social">
                            <a href="#">
                                <img class="icone-email" src="imagens/sprite-social.png" alt="" />
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
                        <h1>Cotação</h1>
                    </div>

                    <div class="box-cotacao">
                        <div class="header-box-cotacao">
                            <h1>Dólar</h1>
                        </div>

                        <div class="cotacoes-dolar">
                            
                            <div class="dolar-comercial">
                                <p>Comercial</p>
                                <p class="dolar-venda">Venda:
                                    <span class="dolar-comercial-venda-preco">
                                        <script type="text/javascript">
                                            document.write('R$ ' + Cotacao.obterDolarComercial()["venda"]);
                                        </script>
                                    </span>
                                </p>

                                <p class="dolar-compra">Compra:
                                    <span class="dolar-comercial-compra-preco">
                                        <script type="text/javascript">
                                            document.write('R$ ' + Cotacao.obterDolarComercial()["compra"]);
                                        </script>
                                    </span>
                                </p>
                            </div>

                            <div class="dolar-paralelo">
                                <p>Paralelo</p>
                                <p class="dolar-venda">Venda:
                                    <span class="dolar-paralelo-venda-preco">
                                        <script type="text/javascript">
                                            document.write('R$ ' + Cotacao.obterDolarParalelo()["venda"]);
                                        </script>
                                    </span>
                                </p>

                                <p class="dolar-compra">Compra:
                                    <span class="dolar-paralelo-compra-preco">
                                        <script type="text/javascript">
                                            document.write('R$ ' + Cotacao.obterDolarParalelo()["compra"]);
                                        </script>
                                    </span>
                                </p>
                            </div>

                        </div>
                    </div> <!-- / box-cotacao -->

                </div> <!-- / cotacao -->

            </div> <!-- / comunicacao-lateral -->