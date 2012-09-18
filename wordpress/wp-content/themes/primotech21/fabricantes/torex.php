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
        Também sediada no Japão, a Torex se destaca como um dos principais
        fornecedores de Reguladores de Tensão CMOS, detectores de tensão e
        Conversores DC/AC. A Torex é especializada em circuitos integrados
        para o gerenciamento de energia. Seus produtos são ideias para
        dispositivos portáteis operados por baterias assim como para
        diversas aplicações com uso de rede elétrica (T/T2), gravadores e
        reprodutores digitais de sinais de RF, amplificadores de RF para 
        linhas de produção de aparelhos de TV entre outros.
    </p>
</div>

<div class="header-categorias">
    <h1>Categorias</h1>
</div>

<div class="lista-categorias">

</div>

<div class="botoes">
    <div class="box-faca-cotacao grid_5">
        <a href="#">
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