<!doctype html>
<html lang="pt-br">
    <head>
        <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
        <meta charset="UTF-8" />
        <title><?php bloginfo('title'); ?> &#8212; Página inicial</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="Marcker: marckfree at gmail.com" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Didact+Gothic" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/text.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/960.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" />
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie-styles.css" />
        <![endif]-->
        <?php wp_head(); ?>
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle.all.js"></script>
        <script src="http://cotacao.republicavirtual.com.br/web_cotacao.php?formato=javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script> 
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div id="container" class="container_12">
            
            <div id="header" class="alpha grid_12">  
                
                <div class="logotipo">
                </div> <!-- / logotipo -->

                <div class="idiomas">
                    <div class="bandeiras">
                        
                        <div class="pt-br">
                            <a href="#">
                                <img src="<?php bloginfo('template_url') ?>/imagens/pt-br.jpg" alt="" />
                            </a>
                        </div>

                        <div class="en-us">
                            <a href="#">
                                <img src="<?php bloginfo('template_url') ?>/imagens/en-us.jpg" alt="" />
                            </a>
                        </div>

                    </div>
                </div> <!-- / idiomas -->

                <div class="banner">
                    <img src="<?php bloginfo('template_url') ?>/imagens/banner-rotate.jpg" alt="" />
                    <img src="<?php bloginfo('template_url') ?>/imagens/banner-rotate2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url') ?>/imagens/banner-topo.jpg" alt="" />
                </div> <!-- / banner -->

            <!--[if lt IE 9]>
                <div class="menu-ie">
            <![endif]-->

            <!--[if !IE]><!-->
                <div class="menu">        
            <!--<![endif]-->
                    <ul>
                        <li class="primotech-21">
                            <a href="#">Primotech 21</a>
                        </li>
                        
                        <li class="fabricantes">
                            <a href="#">Fabricantes</a>
                            
                            <ul>
                                <li>
                                    <a href="#">Alps</a>
                                </li>

                                <li>
                                    <a href="#">Nichicon</a>
                                </li>

                                <li>
                                    <a href="#">Torex</a>
                                </li>

                                <li>
                                    <a href="#">Astro</a>
                                </li>

                                <li>
                                    <a href="#">Eiden</a>
                                </li>

                                <li>
                                    <a href="#">Aven</a>
                                </li>
                            </ul>

                        </li>
                        
                        <li class="onde-comprar">
                            <a href="#">Onde comprar</a>

                            <ul>
                                <li>
                                    <a href="#">Item 1</a>
                                </li>

                                <li>
                                    <a href="#">Item 2</a>
                                </li>

                                <li>
                                    <a href="#">Item 3</a>
                                </li>

                                <li>
                                    <a href="#">Item 4</a>
                                </li>

                                <li>
                                    <a href="#">Item 5</a>
                                </li>
                            </ul>

                        </li>
                        
                        <li class="aplicacoes">
                            <a href="#">Aplicações</a>
                        </li>
                        
                        <li class="primonews">
                            <a href="#">Primonews</a>
                        </li>
                        
                        <li class="amostras">
                            <a href="#">Amostras</a>

                            <ul>
                                <li>
                                    <a href="#">Item 1</a>
                                </li>

                                <li>
                                    <a href="#">Item 2</a>
                                </li>

                                <li>
                                    <a href="#">Item 3</a>
                                </li>

                                <li>
                                    <a href="#">Item 4</a>
                                </li>

                                <li>
                                    <a href="#">Item 5</a>
                                </li>
                            </ul>

                        </li>
                        
                        <li class="fale-conosco" style="margin-right:0;">
                            <a href="#">Fale conosco</a>
                        </li>
                    </ul>
                </div> <!-- / menu -->

            </div> <!-- / header -->