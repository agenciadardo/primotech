<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title><?php bloginfo('title'); ?> &#8212; <?php if (is_home()){echo 'Página Inicial';}else{the_title();} ?></title>
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

            <!--[if lt IE 9]>
                <div class="menu-ie">
            <![endif]-->

            <!--[if !IE]><!-->
                <div class="menu">        
            <!--<![endif]-->
                    <ul>
                        <li class="primotech-21">
                            <a href="<?php bloginfo('url'); ?>">Primotech 21</a>
                            <?php 
                            $idPrimotech21 = get_page_by_title('Primotech 21')->ID;
                            $subpaginas = wp_list_pages('title_li=&child_of='.$idPrimotech21.'&echo=0&sort_column=post_date');
                            
                            if ($subpaginas) { ?>
                            <ul>                                
                                <?php echo $subpaginas; ?>
                            </ul>
                            <?php } ?>
                        </li>
                        
                        <li class="fabricantes">
                            <a href="<?php bloginfo('url'); ?>/fabricantes">Fabricantes</a>
                            <?php 
                            $idFabricantes = get_page_by_title('Fabricantes')->ID;
                            $subpaginas = wp_list_pages('title_li=&child_of='.$idFabricantes.'&echo=0&sort_column=post_date');
                            
                            if ($subpaginas) { ?>
                            <ul>                                
                                <?php echo $subpaginas; ?>
                            </ul>
                            <?php } ?>
                        </li>
                        
                        <li class="onde-comprar">
                            <a href="<?php bloginfo('url'); ?>/onde-comprar">Onde comprar</a>
                            <?php 
                            $idOndeComprar = get_page_by_title('Onde comprar')->ID;
                            $subpaginas = wp_list_pages('title_li=&child_of='.$idOndeComprar.'&echo=0&sort_column=post_date');
                            
                            if ($subpaginas) { ?>
                            <ul>                                
                                <?php echo $subpaginas; ?>
                            </ul>
                            <?php } ?>
                        </li>
                        
                        <li class="aplicacoes">
                            <a href="<?php bloginfo('url'); ?>/aplicacoes">Aplicações</a>
                        </li>
                        
                        <li class="primonews">
                            <a href="<?php bloginfo('url'); ?>/primonews">Primonews</a>
                        </li>
                        
                        <li class="amostras">
                            <a href="<?php bloginfo('url'); ?>/amostras">Amostras</a>
                            <?php 
                            $idAmostras = get_page_by_title('Amostras')->ID;
                            $subpaginas = wp_list_pages('title_li=&child_of='.$idAmostras.'&echo=0&sort_column=post_date');
                            
                            if ($subpaginas) { ?>
                            <ul>                                
                                <?php echo $subpaginas; ?>
                            </ul>
                            <?php } ?>
                        </li>
                        
                        <li class="fale-conosco" style="margin-right:0;">
                            <a href="<?php bloginfo('url'); ?>/fale-conosco">Fale conosco</a>
                        </li>
                    </ul>
                </div> <!-- / menu -->

            </div> <!-- / header -->