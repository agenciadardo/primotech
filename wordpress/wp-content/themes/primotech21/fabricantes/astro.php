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
        A Astro Design se destaca como um dos principais fornecedores de equipamentos
        de teste para indústria de áudio e vídeo. Sua linha de produtos inclui monitores
        de forma de onda e vetor, monitores de áudio <i>embedded</i> e geradoras de sinais
        HD-SDI e 3G-SDI, geradores de sinais digitais e analisadores HDMI para a linha de
        produção de aparelhos de TV, DVD, BD e <i>receiver</i> HI-FI.
    </p>
</div>

<div class="boxes-categorias">
    <?php 
        $linksCategorias1 = array(
            link1 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/4k-camera-system",
            link2 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/4k2k-recording-system",
            link3 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/3d-products",
            link4 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/waveform-and-professional-monitor-llineup",
            link5 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/audio-monitor",
            link6 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/mpeg-2-ts-products",
            link7 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/peripherals",
            link8 => "http://www.astrodesign.co.jp/english/category/products/video-equipment/4k-high-definition-collection"
        );

        $linksCategorias2 = array(
            link1 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/video-signal-generator",
            link2 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/protocol-analyzer",
            link3 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/signal-conversion-adapter",
            link4 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/hdmi-switcher",
            link5 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/tuner-module-testing",
            link6 => "http://www.astrodesign.co.jp/english/category/products/test-and-measurement/measurement-option"
        );
     ?>
    <div class="box-categoria">
        <div class="header-box-categoria">
            <p>Video Equipment</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/video-equipment.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias1[link1]; ?>">4K Camera System</a></li>
                <li><a href="<?php echo $linksCategorias1[link2]; ?>">4K/2K Recording System</a></li>
                <li><a href="<?php echo $linksCategorias1[link3]; ?>">3D Products</a></li>
                <li><a href="<?php echo $linksCategorias1[link4]; ?>">Waveform and Professional Monitor Lineup</a></li>
                <li><a href="<?php echo $linksCategorias1[link5]; ?>">Audio Monitor</a></li>
                <li><a href="<?php echo $linksCategorias1[link6]; ?>">MPEG-2 TS Products</a></li>
                <li><a href="<?php echo $linksCategorias1[link7]; ?>">Peripherals</a></li>
                <li><a href="<?php echo $linksCategorias1[link8]; ?>">4K High-Definition Collection</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

    <div class="box-categoria">
        <div class="header-box-categoria">
            <p>Test & Measurement</p>
        </div>

        <div class="imagem-box-categoria">
            <img src="<?php bloginfo('template_url'); ?>/imagens/test-measurement.jpg" alt="" />
        </div>

        <div class="lista-itens-box-categoria">
            <ul>
                <li><a href="<?php echo $linksCategorias2[link1]; ?>">Video Signal Generator</a></li>
                <li><a href="<?php echo $linksCategorias2[link2]; ?>">Protocol Analyser</a></li>
                <li><a href="<?php echo $linksCategorias2[link3]; ?>">Signal Conversion Adapter</a></li>
                <li><a href="<?php echo $linksCategorias2[link4]; ?>">HDMI Switcher</a></li>
                <li><a href="<?php echo $linksCategorias2[link5]; ?>">Tuner Moduling Testing</a></li>
                <li><a href="<?php echo $linksCategorias2[link6]; ?>">Measurement Option</a></li>
            </ul>
        </div>
    </div> <!-- / Box Categoria -->

</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url') ?>/onde-comprar/astro">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Saiba onde</p>
                <p class="linha-2-cotacao">Comprar</p>
            </div>
        </a>
    </div>

    <div class="box-faca-cotacao grid_3">
        <a href="#">
            <div class="botao-cotacao">
                <p class="linha-1-cotacao">Faça uma</p>
                <p class="linha-2-cotacao">Cotação</p>
            </div>
        </a>
    </div>
</div> <!-- / Botões -->