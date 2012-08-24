var Noticias = Noticias || {};

Noticias = {
    alturaMinimaBox: 0,
    alturaMaximaBox: 160,
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
                if (Noticias.alturaMinimaBox === 160) {
                    box.scrollTop = Noticias.alturaMaximaBox <= 0 ? 
                                    Noticias.alturaMaximaBox = 0 : 
                                    Noticias.alturaMaximaBox -= 2;
                }
                else if (Noticias.alturaMaximaBox === 160) {
                    box.scrollTop = Noticias.alturaMinimaBox += 2;
                }

                if ( (Noticias.alturaMaximaBox === 0) && (Noticias.alturaMinimaBox === 160) ) {
                    pararScroll(intervalo);
                    Noticias.alturaMaximaBox = 160;
                    Noticias.alturaMinimaBox = 0;
                    executarScroll();
                }
            }, 100);
        
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