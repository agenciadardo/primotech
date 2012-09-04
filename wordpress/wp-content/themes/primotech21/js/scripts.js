var Noticias = Noticias || {};
Noticias = {
    alturaMinimaBox: 0,
    alturaMaximaBox: 135,
    box: function(seletor) {
        return document.querySelector(seletor);
    },
    scroll: function() {
        var scroll, box;
        scroll = this.alturaMinimaBox;
        box = this.box('.box-noticias');

        function controlarScroll() {
            var intervalo;

            intervalo = setInterval(function(){
                if (Noticias.alturaMinimaBox === 135) {
                    box.scrollTop = Noticias.alturaMaximaBox <= 0 ? 
                                    Noticias.alturaMaximaBox = 0 : 
                                    Noticias.alturaMaximaBox -= 1;
                }
                else if (Noticias.alturaMaximaBox === 135) {
                    box.scrollTop = Noticias.alturaMinimaBox += 1;
                }

                if ( (Noticias.alturaMaximaBox === 0) && (Noticias.alturaMinimaBox === 135) ) {
                    pararScroll(intervalo);
                    Noticias.alturaMaximaBox = 135;
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

var Cotacao = Cotacao || {};
Cotacao = {
    obterDadosWS: (function() {
        return resultadoCEP;
    })(),

    obterDolarComercial: function() {
        var dolarComercial;
        dolarComercial = [];

        dolarComercial.venda = this.obterDadosWS.dolar_comercial_venda;
        dolarComercial.compra = this.obterDadosWS.dolar_comercial_compra;
        
        return dolarComercial;
    },

    obterDolarParalelo: function() {
        var dolarParalelo;
        dolarParalelo = [];

        dolarParalelo.venda = this.obterDadosWS.dolar_paralelo_venda;
        dolarParalelo.compra = this.obterDadosWS.dolar_paralelo_compra;
        
        return dolarParalelo;
    }
};