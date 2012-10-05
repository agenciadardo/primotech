<?php get_header(); ?>

<div id="fabricantes-lateral" class="grid_3">
    
    <div class="header-coluna">
        <h1>Fabricantes</h1>
    </div>

    <div class="marcas">

        <div class="box-marca-1">
            <a href="<?php bloginfo('url'); ?>/fabricantes/alps">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-2">
            <a href="<?php bloginfo('url'); ?>/fabricantes/nichicon">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-3">
            <a href="<?php bloginfo('url'); ?>/fabricantes/torex">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-4">
            <a href="<?php bloginfo('url'); ?>/fabricantes/astro">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-5">
            <a href="<?php bloginfo('url'); ?>/fabricantes/eiden">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

        <div class="box-marca-7">
            <a href="<?php bloginfo('url'); ?>/fabricantes/aven">
                <img src="<?php bloginfo('template_url'); ?>/imagens/sprite-fabricantes.png" alt="" />
            </a>
        </div>

    </div> <!-- / marcas -->

</div> <!-- / fabricantes-lateral --> 

<div id="conteudo-central" class="grid_9">

    <div class="header-paginas">

        <?php if (is_page('fabricantes')) { ?>
        <div class="icone-fabricantes"></div>
        <?php } ?>

        <?php if (is_page('onde-comprar')) { ?>
        <div class="icone-onde-comprar"></div>
        <?php } ?>
        
        <?php if (is_page('aplicacoes')) { ?>
        <div class="icone-aplicacoes"></div>
        <?php } ?>
        
        <?php if (is_page('primonews')) { ?>
        <div class="icone-primonews"></div>
        <?php } ?>
        
        <?php if (is_page('amostras')) { ?>
        <div class="icone-amostras"></div>
        <?php } ?>

        <?php if (is_page('fale-conosco')) { ?>
        <div class="icone-fale-conosco"></div>
        <?php } ?>
        <?php if (is_page('cotacao')) { ?>
        <div class="icone-onde-comprar"></div>
        <?php } ?>

        <?php // Nomeia as páginas e subpáginas; ?>

            <?php
            $idPrimotech21 = get_page_by_title('Primotech 21')->ID;
            $idFabricantes = get_page_by_title('Fabricantes')->ID;
            $idOndeComprar = get_page_by_title('Onde comprar')->ID;
            $idAmostras = get_page_by_title('Amostras')->ID; 
            ?> 

            <?php if (is_page('cadastrar-aplicacoes')) { ?>
                <div class="icone-aplicacoes"></div>
                <h1>Aplicações</h1>
            <?php }
            elseif ($post->post_parent == $idPrimotech21) { ?>
                
                <div class="icone-primotech21"></div>

            <?php // Personalização dos títulos das subpáginas da Primotech21 ?>

                <?php if (is_page('suporte-tecnico-no-desenvolvimento')) { ?>
                    <h1>Suporte Técnico no Desenvolvimento</h1>
                <?php }
                if (is_page('suporte-logistico-nas-operacoes')) { ?>
                    <h1>Suporte Logístico nas Operações</h1>
                <?php } 
                if ( (is_page('a-empresa')) || (is_page('visao-e-missao')) || (is_page('suporte-pos-vendas')) ) { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>

            <?php // / Personalização dos títulos ?>

            <?php }
            elseif ($post->post_parent == $idFabricantes) { ?>
                <div class="icone-fabricantes"></div>
                <h1>Fabricantes</h1>
            <?php }
            elseif ($post->post_parent == $idOndeComprar) { ?>
                <div class="icone-onde-comprar"></div>
                <h1>Onde comprar</h1>
            <?php }
            elseif ($post->post_parent == $idAmostras) { ?>
                <div class="icone-amostras"></div>
                <h1>Amostras</h1>  
            <?php }
            else { ?>
            <?php // Página Cotação - Título ?>
                <?php if (is_page('cotacao')) { ?>
                    <h1>Faça sua <?php echo strtolower(get_the_title()); ?></h1>    
                <?php }
                else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>
             <?php } ?>
    </div>

    <div class="conteudo-pagina">
        <div class="conteudo-<?php echo preg_replace('[\s]', '-', strtolower(get_the_title())); ?>">
            <?php the_content(); ?>
            
            <?php // Página Onde comprar; ?>
                <?php if (is_page('onde-comprar')) { ?>
                    <?php 
                    $idOndeComprar = get_page_by_title('Onde comprar')->ID;
                    $subpaginas = wp_list_pages('title_li=&child_of='.$idOndeComprar.'&echo=0&sort_column=post_date');
                    
                    if ($subpaginas) { ?>
                    <ul>                                
                        <?php echo $subpaginas; ?>
                    </ul>

                    <div class="center banner-central banner-inferior">
                        <img src="<?php bloginfo('template_url'); ?>/imagens/banner-inferior.jpg" alt="">
                    </div>
                    <?php } ?>
                <?php } ?>


            <?php // Página Fabricantes; ?>
                <?php if (is_page('fabricantes')) { ?>
                    <?php 
                    $idFabricantes = get_page_by_title('Fabricantes')->ID;
                    $subpaginas = wp_list_pages('title_li=&child_of='.$idFabricantes.'&echo=0&sort_column=post_date');
                    
                    if ($subpaginas) { ?>
                    <ul>                                
                        <?php echo $subpaginas; ?>
                    </ul>
                    <?php } ?>
                <?php } ?>


            <?php // Página Amostras; ?>
                <?php if (is_page('amostras')) { ?>

                    <div class="header-amostras">
                        <div class="header-esquerda">
                            <p>Solicite uma amostra.</p>
                        </div>

                        <div class="header-direita">
                            <p>Agende uma solitação.</p>
                        </div>
                    </div>

                    <div class="amostras-logotipos">

                        <div class="logotipos-esquerda">
                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/alps">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-alps.jpg" alt="" />
                                </a>
                            </div>

                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/nichicon">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-nichicon.jpg" alt="" />
                                </a>
                            </div>

                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/torex">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-torex.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- / Logotipos Esquerda -->

                        <div class="logotipos-direita">
                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/astro">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-astro.jpg" alt="" />
                                </a>
                            </div>

                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/eiden">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-eiden.jpg" alt="" />
                                </a>
                            </div>

                            <div class="logotipo-amostras">
                                <a href="<?php bloginfo('url'); ?>/amostras/aven">    
                                    <img src="<?php bloginfo('template_url');?>/imagens/logotipo-aven.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- / Logotipos Direita -->
                    </div> <!-- / Logotipos das Amostras -->

                    <div class="box-deixar-opiniao grid_9">
                        <a href="<?php bloginfo('url'); ?>/fale-conosco">
                            <div class="botao-opiniao">
                                <p class="linha-1-opiniao">Deixe sua opinião. Entre</p>
                                <p class="linha-2-opiniao">em contato com a P21.</p>
                            </div>
                        </a>
                    </div>
            <?php } ?>

            <?php // Página Primonews; ?>
                <?php 
                    if (is_page('primonews')) {
                        include 'primonews.php'; 
                    } 
                ?>
            <?php // Página Cotacao; ?>
                <?php 
                    if (is_page('cotacao')) {
                        include 'cotacao.php'; 
                    } 
                ?>

            <?php // Página Fale conosco; ?>
                <?php if (is_page('fale-conosco')) { ?>

                    <div class="header-fale-conosco">
                        <p>Sua opinião é muito importante para a P21.</p>
                    </div>

                    <div class="formulario-fale-conosco">
                        <?php if (empty($_GET['enviado'])) { ?>

                            <form method="post" 
                                  action="<?php bloginfo('template_url') ?>/enviar-mensagem.php"
                                  id="formulario-fale-conosco">

                                <p class="validar-nome"></p>
                                <label for="textbox-nome">Nome: </label>
                                <input type="text" value="&nbsp;" name="textbox-nome" id="textbox-nome" />

                                <br />

                                <p class="validar-email"></p>
                                <label for="textbox-email">E-mail: </label>
                                <input type="text" value="&nbsp;" name="textbox-email" id="textbox-email" />

                                <br />

                                <p class="validar-telefone"></p>
                                <label for="textbox-ddd">Telefone: </label>
                                <input type="text" value="&nbsp;" name="textbox-ddd" id="textbox-ddd" />
                                <input type="text" value="&nbsp;" name="textbox-telefone" id="textbox-telefone" />

                                <br />

                                <p class="validar-empresa"></p>
                                <label for="textbox-empresa">Empresa: </label>
                                <input type="text" value="&nbsp;" name="textbox-empresa" id="textbox-empresa" />

                                <br />

                                <p class="validar-endereco"></p>
                                <label for="textbox-endereco">Endereço: </label>
                                <input type="text" value="&nbsp;" name="textbox-endereco" id="textbox-endereco" />
                                <label for="textbox-cep">CEP: </label>
                                <input type="text" value="&nbsp;" name="textbox-cep" id="textbox-cep" />

                                <br />

                                <label for="textbox-cidade">Cidade: </label>
                                <input type="text" value="&nbsp;" name="textbox-cidade" id="textbox-cidade" />
                                <label for="textbox-estado">Estado: </label>
                                <input type="text" value="&nbsp;" name="textbox-estado" id="textbox-estado" />

                                <br />

                                <p class="validar-mensagem"></p>
                                <label for="textarea-mensagem">Mensagem: </label>
                                <textarea name="textarea-mensagem" id="textarea-mensagem"></textarea>

                                <br />

                                <div class="botao-enviar grid_9">
                                    <input type="submit" name="botao-enviar" value="Enviar" />
                                </div>

                            </form>

                            <?php 
                            }
                            else { ?>
                            
                                <h3 id="obrigado" style="text-align:center;">
                                    Mensagem enviada com sucesso.<br />
                                    Obrigado!
                                </h3> 
                            <?php } ?>
                    </div> <!-- / Formulário Fale Conosco -->

            <?php } ?>

            <?php // Página Aplicações; ?>
                <?php if (is_page('aplicacoes')) { ?>

                    <div class="header-aplicacoes">
                        <p>Você pode consultar o melhor item de acordo com
                            a aplicação da sua empresa. Conheça as melhores 
                            opções para cada aplicação.
                        </p>
                    </div>

                    <div class="header-categorias">
                        <h1>Categorias</h1>
                    </div>

                    <div class="colunas-categorias">

                        <div class="coluna-categorias-esquerda">

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-automotivo.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Automotivo</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-industria.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Indústria de eletroeletrônicos</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-broadcasting.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Broadcasting</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                        </div> <!-- / Coluna esquerda -->

                        <div class="coluna-categorias-direita">

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-linha-branca.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Linha Branca</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-telefonia.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Telefonia Móvel</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                            <a href="<?php bloginfo('url') ?>/cadastrar-aplicacoes">                            
                                <div class="botao-categoria">
                                    <div class="categoria-icone">
                                        <img src="<?php bloginfo('template_url') ?>/imagens/categoria-outros.jpg" alt="" />
                                    </div>
                                    <div class="categoria-texto">
                                        <span>Outros</span>
                                    </div>
                                </div> <!-- Botão categoria -->
                            </a>

                        </div> <!-- / Coluna direita -->
                    </div>

            <?php } ?>

            <?php // Página Cadastro de Aplicações; ?>
                <?php if (is_page('cadastrar-aplicacoes')) { ?>

                    <div class="header-aplicacoes">
                        <p>Pronto. Agora insira seus dados. Nossa equipe irá
                            enviar informações personalizadas para você! É rápido
                            e fácil!
                        </p>
                    </div>

                    <div class="formulario-aplicacoes">
                        <?php if (empty($_GET['enviado'])) { ?>

                            <form method="post" 
                                  action="<?php bloginfo('template_url') ?>/cadastrar-aplicacoes.php"
                                  id="formulario-fale-conosco">


                                <p class="validar-empresa"></p>
                                <label for="textbox-empresa">Empresa: </label>
                                <input type="text" value="&nbsp;" name="textbox-empresa" id="textbox-empresa" />

                                <br />

                                <p class="validar-email"></p>
                                <label for="textbox-email">E-mail: </label>
                                <input type="text" value="&nbsp;" name="textbox-email" id="textbox-email" />

                                <br />

                                <p class="validar-nome"></p>
                                <label for="textbox-nome">Nome: </label>
                                <input type="text" value="&nbsp;" name="textbox-nome" id="textbox-nome" />

                                <br />

                                <p class="validar-telefone"></p>
                                <label for="textbox-ddd">Telefone: </label>
                                <input type="text" value="&nbsp;" name="textbox-ddd" id="textbox-ddd" />
                                <input type="text" value="&nbsp;" name="textbox-telefone" id="textbox-telefone" />

                                <br />

                                <div class="botao-enviar grid_9">
                                    <input type="submit" name="botao-enviar" value="Enviar" />
                                </div>

                            </form>

                            <?php 
                            }
                            else { ?>
                            
                                <h3 id="obrigado" style="text-align:center;">
                                    Mensagem enviada com sucesso.<br />
                                    Obrigado!
                                <h3>
                            </p> 
                            <?php } ?>
                    </div> <!-- / Formulário Aplicações -->

            <?php } ?>
                
            <?php // Includes para as subpáginas; ?>
                <?php 
                global $post; 
                $idFabricantes = get_page_by_title('Fabricantes')->ID;
                $idOndeComprar = get_page_by_title('Onde comprar')->ID;
                $idAmostras = get_page_by_title('Amostras')->ID;
                ?>

            <?php // Includes Fabricantes; ?>
                <?php if (is_page('alps') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idFabricantes) { ?>
                    <?php include "fabricantes/aven.php"; ?>
                <?php } ?>

            <?php // Includes Onde comprar; ?>
                <?php if (is_page('alps') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idOndeComprar) { ?>
                    <?php include "onde-comprar/aven.php"; ?>
                <?php } ?>

            <?php // Includes Amostras; ?>
                <?php if (is_page('alps') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/alps.php"; ?>
                <?php } ?>

                <?php if (is_page('nichicon') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/nichicon.php"; ?>
                <?php } ?>

                <?php if (is_page('torex') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/torex.php"; ?>
                <?php } ?>

                <?php if (is_page('astro') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/astro.php"; ?>
                <?php } ?>

                <?php if (is_page('eiden') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/eiden.php"; ?>
                <?php } ?>

                <?php if (is_page('aven') && $post->post_parent == $idAmostras) { ?>
                    <?php include "amostras/aven.php"; ?>
                <?php } ?>
        </div>
    </div>

</div> <!-- / conteudo-central -->

<?php get_footer(); ?>