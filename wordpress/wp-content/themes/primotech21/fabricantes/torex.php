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
        Torex se destaca como um dos principais
        fornecedores de Reguladores de Tensão CMOS,
        detectores de tensão e Conversores DC/DC. Seus
        produtos são ideais para dispositivos portáteis
        operados por baterias assim como para diversas
        aplicações com uso de rede elétrica.

    </p>
</div>

<div class="header-categorias">
    <h1>Categorias</h1>
</div>

<div class="lista-categorias">
    <?php 
        $linksCategorias = array(
            link1 => "http://www.torex.co.jp/english/products/voltage_detectors/",
            link2 => "http://www.torex.co.jp/english/products/voltage_regulators/",
            link3 => "http://www.torex.co.jp/english/products/load_switch/",
            link4 => "http://www.torex.co.jp/english/products/dcdc_converters/",
            link5 => "http://www.torex.co.jp/english/products/charge_pump_ics/",
            link6 => "http://www.torex.co.jp/english/products/battery_charge_ic/",
            link7 => "http://www.torex.co.jp/english/products/temperature_sensors/",
            link8 => "http://www.torex.co.jp/english/products/hall_ic/",
            link9 => "http://www.torex.co.jp/english/products/power_mosfets/",
            link10 => "http://www.torex.co.jp/english/products/op_amps/",
            link11 => "http://www.torex.co.jp/english/products/low_noise_amplifier/",
            link12 => "http://www.torex.co.jp/english/products/cmos_logic/",
            link13 => "http://www.torex.co.jp/english/products/oscillator_ic/",
            link14 => "http://www.torex.co.jp/english/products/pll_clock_generator_ics/",
            link15 => "http://www.torex.co.jp/english/products/schottky_barrier_diodes/",
            link16 => "http://www.torex.co.jp/english/products/transient_voltage_suppressor/"
        );
     ?>
    <a href="<?php echo $linksCategorias[link1]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Voltage Detectors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link2]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Voltage Regulators</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link3]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Load Switch</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link4]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>DC/DC Converters</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link5]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Charge Pump ICs</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link6]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Battery Charge IC</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link7]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Temperature Sensors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link8]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Hall IC (Magnetic Sensor)</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link9]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Power MOSFETs</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link10]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Ops Amps</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link11]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Low Noise Amplifier</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link12]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>CMOS Logic</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link13]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Oscillator OC</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link14]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">PLL CLock Generator ICs</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link15]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Schottky Barrier Diode</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link16]; ?>">
        <div class="botao-categoria">
            <div class="marginTop categoria-texto">
                <span class="texto-maior">Transient Voltage Suppressor (TVs)</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url'); ?>/onde-comprar/torex">
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