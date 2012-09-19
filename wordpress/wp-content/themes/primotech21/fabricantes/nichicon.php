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
        Desde 1950 a Nichicon está presente como um dos mais conhecidos
        fabricantes de capacitores do mundo. Reconhecido por sua alta 
        confiabilidade e performance diferenciada, sua linha de produtos é
        a mais completa do mercado.
    </p>
</div>

<div class="header-categorias">
    <h1>Categorias</h1>
</div>

<div class="lista-categorias">
    <?php 
        $linksCategorias = array(
            link1 => "http://www.nichicon.co.jp/english/products/alm_chip/pict_f.htm",
            link2 => "http://www.nichicon.co.jp/english/products/alm_mini/pict_f.htm",
            link3 => "http://www.nichicon.co.jp/english/products/alm_larg/pict_f.htm",
            link4 => "http://www.nichicon.co.jp/english/products/solid/pict_f.htm",
            link5 => "http://www.nichicon.co.jp/english/products/evercap/pict_f.htm",
            link6 => "http://www.nichicon.co.jp/english/products/tantal/pict_f.htm",
            link7 => "http://www.nichicon.co.jp/english/products/film/pict_f.htm",
            link8 => "http://www.nichicon.co.jp/english/products/posi/pict_f.htm",
            link9 => "http://www.nichicon.co.jp/english/products/module/pict_f.htm"
        );
     ?>
    <a href="<?php echo $linksCategorias[link1]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Chip Type Aluminum Electrolytic Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link2]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Miniature Type Aluminium Electrolytic Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link3]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Large Can Type Aluminum Electrolytic Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link4]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Electric Double Layer Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link5]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="texto-maior">Conductive Polymer Aluminum Solid Electrolytic Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link6]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span>Tantalum Electrolytic Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link7]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="uma-linha">Plastic Film Capacitors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link8]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="uma-linha">Positive Thermistors</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

    <a href="<?php echo $linksCategorias[link9]; ?>">
        <div class="botao-categoria">
            <div class="categoria-texto">
                <span class="uma-linha">Function Modules</span>
            </div>
        </div> <!-- Botão categoria -->
    </a>

</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="<?php bloginfo('url'); ?>/onde-comprar/nichicon">
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