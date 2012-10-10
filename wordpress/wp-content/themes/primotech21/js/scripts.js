// var $ = jQuery.noConflict();
$(document).ready(function() {
    var i;
    i = 0;
    
    $(".noticia").each(function() {
          var box;
          box = $(this);
          
          box.css("top", i);
          i += 50;
          moverScroll(box);
    });
});

function moverScroll($ele) {
    var topo;
    topo = parseInt($ele.css("top"), 10);
    
    if (topo < -40) {
        topo = 150;
        $ele.css("top", topo);
    }

    $ele.animate({ 
        top: parseInt((topo)-50, 10) 
    },
        4000, //velocidade 
        'linear',
        function() {
            moverScroll($(this));
        }
    );
}