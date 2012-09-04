<?php get_header(); ?>

    <div id="conteudo_pagina" class="grid_12 omega"><!-- Conteúdo -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Listar os posts -->
                
                <!-- Página Contato -->
                <?php if (is_page('contato')) { ?>
                <div class="conteudo_pagina">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <div id="formulario-contato">

                        <?php if (empty($_GET['enviado'])) { ?>

                            <form action="<?php bloginfo('template_url'); ?>\enviar-email.php" method="post">
                                <span class="nome"></span>
                                <input type="text" value="Nome" id="formulario_contato_nome" name="textbox_nome" />
                                <br />
                                
                                <span class="email"></span>
                                <input type="text" value="E-mail" id="formulario_contato_email" name="textbox_email" />
                                <br />

                                <span class="telefone"></span>
                                <input type="text" value="Telefone" id="formulario_contato_telefone" name="textbox_telefone" />
                                <br />
                                
                                <textarea id="formulario_contato_mensagem" name="textarea_mensagem">Mensagem</textarea><br />
                                <p>
                                    <a href="#">
                                        Pol&iacute;ticas de privacidade
                                    </a>
                                    <input type="submit" value="Enviar" id="formulario_contato_submit" />
                                </p>
                            </form>
                        
                        <?php 
                        }
                        else { ?>
                        
                            <h3>
                                Mensagem enviada com sucesso.<br />
                                Obrigado!
                            <h3>
                        
                        <?php } ?>

                    </div>

                </div>
                <?php }
                     else { ?>
                        <?php if ( is_front_page() ) { ?>
                            <div class="conteudo_pagina">
                                <h1><?php the_title(); ?></h1>
                        <?php } 
                              else { ?>
                            <div class="conteudo_pagina">
                                <h1><?php the_title(); ?></h1>
                        <?php } ?>
                             <?php the_content(); ?>
                         </div>
                    <?php } ?>
            <?php endwhile; else: ?>
                <div class="post_conteudo grid_9"><!-- Post -->
                    <p><?php _e('Desculpe, não existem postagens sobre esse assunto.'); ?></p>
                </div><!-- endOf Post -->
             <?php endif; ?><!-- endOf Listar os posts -->
    
        </div><!-- endOf Conteúdo -->

    </div><!-- endOf Container -->

<?php get_footer(); ?>