var Noticias = Noticias || {};
Noticias = {
    alturaMinimaBox: 0,

    box: function(seletor) {
        return document.querySelector(seletor);
    },
    
    scroll: function(altura, alturaMaxima, selector) {
        var scroll, box;
        scroll = this.alturaMinimaBox;
        box = this.box(selector);

        function controlarScroll() {
            var intervalo;

            intervalo = setInterval(function(){
                if (Noticias.alturaMinimaBox === altura) {
                    box.scrollTop = alturaMaxima <= 0 ? 
                                    alturaMaxima = 0 : 
                                    alturaMaxima -= 1;
                }
                else if (alturaMaxima === altura) {
                    box.scrollTop = Noticias.alturaMinimaBox += 1;
                }

                if ( (alturaMaxima === 0) && (Noticias.alturaMinimaBox === altura) ) {
                    pararScroll(intervalo);
                    alturaMaxima = altura;
                    Noticias.alturaMinimaBox = 0;
                    executarScroll();
                }
            }, 50);
        
            box.onmouseover = function() {
                pararScroll(intervalo);
            };

            box.onmouseout = function() {
                executarScroll();
            };
        }

        function executarScroll() {
            controlarScroll();
        }

        function pararScroll(intervalo) {
            clearInterval(intervalo);
        }

        executarScroll();
    }
};

$(document).ready(function() {

    // function validar_campo(formulario, campo, tipo_campo) {
    //     var valor;
    //     valor = $(campo).val();

    //     $(formulario).submit(function() {
    //         if ((valor === '') || (valor === $(campo).val())) {
    //             $(formulario + ' p.' + tipo_campo).text('Por favor preencha o campo abaixo.').show('slow');
    //             return false;
    //         }
    //         else {
    //             return true;
    //         }
    //     });
    // }
    
    // validar_campo('#formulario-amostras', 'input#textbox-cliente', 'validar-cliente');
    // validar_campo('#formulario-amostras', 'input#textbox-projeto', 'validar-projeto');
    // validar_campo('#formulario-amostras', 'input#textbox-qtde-anual', 'validar-qtde-anual');
    // validar_campo('#formulario-amostras', 'input#textbox-sop', 'validar-qtde-anual');
    // validar_campo('#formulario-amostras', 'input#textbox-aplicacao', 'validar-aplicacao');
    // validar_campo('#formulario-amostras', 'input#textbox-ddd', 'validar-telefone');
    // validar_campo('#formulario-amostras', 'input#textbox-telefone', 'validar-telefone');
    // validar_campo('#formulario-amostras', 'input#textbox-email', 'validar-email');

});
