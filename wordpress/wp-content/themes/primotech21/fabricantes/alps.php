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
        Com sua sede no Japão a Alps Electric é um dos maiores fabricantes
        de componentes eletrônicos do mundo. Seu portfólio é composto por
        switch, tact switch, potenciômetros, conectores, sensores, sintonizadores
        módulos de comunicação, mecanismo de impressão, módulos automotivos
        entre outros.
    </p>
</div>

<div class="header-categorias">
    <h1>Categorias</h1>
</div>

<div class="lista-categorias">
    <?php 
        $linksCategorias = array(
            link1 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Sensor/Sensor_list1.html",
            link2 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Switch/Switch_list1.html",
            link3 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Tact/Tact_list1.html",
            link4 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Encoder/Encoder_list1.html",
            link5 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Potentiometer/Potentiometer_list1.html",
            link6 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/MultiControl/MultiControl_list1.html",
            link7 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Contactsheet/Contactsheet/Contactsheet_list1.html",
            link8 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/InputDevice/",
            link9 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Connector/Connector_list1.html",
            link10 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Liqualloy/Liqualloy_list1.html",
            link11 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/PowerInductor/PowerInductor_list1.html",
            link12 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Tuner/Tuner_list1.html",
            link13 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Communication/Communication_list1.html",
            link14 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Optical/Optical/Optical_list1.html",
            link15 => "http://www.alps.com/WebObjects/catalog.woa/E/HTML/Printer/"
        );
     ?>
    <a href="<?php echo $linksCategorias[link1]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Sensor</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link2]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Switch</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link3]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>TACT Switch</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link4]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Encoder</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link5]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Potentiometer</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link6]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Multi Control Device</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link7]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Contactsheet</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link8]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Touch Input Devices</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link9]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Connectors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link10]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Magnetic Sheets Liqualloy</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link11]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Power Inductor</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link12]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Tuner</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link13]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Communication Module</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link14]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Aspherical Glass Lens</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link15]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Actuators &amp; Printers</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>
</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url'); ?>/onde-comprar/alps">
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