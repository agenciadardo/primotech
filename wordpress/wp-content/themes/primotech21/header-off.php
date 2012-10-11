                <a href="<?php bloginfo('url'); ?>">
                    <div class="logotipo">
                    </div> <!-- / logotipo -->
                </a>
                
                <div class="idiomas">
                    <div class="bandeiras">
                        
                        <div class="pt-br">
                            <a href="<?php bloginfo('url'); ?>">    
                                <img src="<?php bloginfo('template_url'); ?>/imagens/pt-br.jpg" alt="" />
                            </a>
                        </div>

                        <div class="en-us">
                            <?php 
                                $url = 'http://www.primotech21.com.br';
                                $urlTeste = 'http://www.agenciadardo.com.br/primotech/'
                            ?>
                            <a href="http://www.google.com/translate?u=<?php echo $urlTeste; ?>&amp;hl=pt-br&amp;ie=UTF8&amp;langpair=pt-br%7Cen&amp;langpair.x=13&amp;langpair.y=13&amp;langpair=pt-br%7Cen">
                                <img src="<?php bloginfo('template_url'); ?>/imagens/en-us.jpg" alt="" />
                            </a>
                        </div>

                    </div>
                </div> <!-- / idiomas -->

                <div class="banner">
                    <?php 
                        if (function_exists('meteor_slideshow')) { 
                            meteor_slideshow('topo'); 
                        }
                    ?>
                </div> <!-- / banner -->