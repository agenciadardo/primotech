<?php 
$theTitlePagina = preg_replace('[\s]', '-', strtolower(get_the_title()));
 ?>

<div class="header-aplicacoes">
    
    <div class="logotipo-fabricantes grid_9">
        <div class="logotipo-<?php echo $theTitlePagina; ?>">
            <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-<?php echo $theTitlePagina, ".jpg"; ?>">
        </div>
    </div>

    <p>
        A Eiden desenvolveu de forma pioneira um
        gerador de sinal RF em estado sólido compacto
        para linhas de fabricantes de TV e Broadcasters.
        Sua linha de produtos oferece Geradores de RF
        para DTV (ISDB-T, DBV-S /S2, DVB-T/T2),
        gravadores e reprodutores digitais de sinais RF,
        amplificadores de RF para linhas de produção de
        aparelhos de TV entre outros.
    </p>
</div>


<div class="boxes-categorias">
    <?php 
        $linksCategorias1 = array(
            link1 => "http://www.eiden-gp.co.jp/product/tv/tv_01_e.html",
            link2 => "http://www.eiden-gp.co.jp/product/tv/tv_02_e.html",
            link3 => "http://www.eiden-gp.co.jp/product/tv/tv_03_e.html",
            link4 => "http://www.eiden-gp.co.jp/product/tv/tv_04_e.html",
            link5 => "http://www.eiden-gp.co.jp/product/tv/tv_05_e.html"
        );

        $linksCategorias2 = array(
            link1 => "http://www.eiden-gp.co.jp/rf_field_analyzer/rf_field_analyzer.htm"
        );
     ?>
    <div class="box-categoria">
        <div class="header-box-categoria">
            <p class="titulo-maior">TV Signal Generator &amp; Measurement Equipment</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/tv-signal-generator.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias1[link1]; ?>">Digital TV Signal Genenerator</a></li>
                <li><a href="<?php echo $linksCategorias1[link2]; ?>">Signal Generator for Mobile TV</a></li>
                <li><a href="<?php echo $linksCategorias1[link3]; ?>">Recorder &amp; Player for MPEG-2 TS, Editing Soft</a></li>
                <li><a href="<?php echo $linksCategorias1[link4]; ?>">Interference Generator, BER Measuring Equipment</a></li>
                <li><a href="<?php echo $linksCategorias1[link5]; ?>">Analog TV Signal Generator, Amplifier</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

    <div class="box-categoria">
        <div class="header-box-categoria">
            <p class="titulo-maior">Field Signal Reproducible Equipment</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/field-signal.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias2[link1]; ?>">SpectruMate FHA7902A</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

</div> <!-- / Boxes Categorias -->

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url') ?>/onde-comprar/eiden">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Saiba onde</p>
                <p class="linha-2-cotacao">Comprar</p>
            </div>
        </a>
    </div>

    <div class="box-faca-cotacao grid_3">
        <a href="<?php bloginfo('url'); ?>/cotacao">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Faça uma</p>
                <p class="linha-2-cotacao">Cotação</p>
            </div>
        </a>
    </div>
</div> <!-- / Botões -->