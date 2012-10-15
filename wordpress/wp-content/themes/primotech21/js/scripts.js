// var $ = jQuery.noConflict();
$(document).ready(function() {
    var i, j;
    i = 0;
    
    $(".noticia").each(function() {
          var box;
          box = $(this);
          
          box.css("top", i);
          i += 126;
          moverScroll(box);
    });

    j = 0;

    $(".noticia-primonews").each(function() {
          var boxPrimonews;
          boxPrimonews = $(this);
          
          boxPrimonews.css("top", j);
          j += 165;
          moverScrollPrimonews(boxPrimonews);
    });

});

function moverScroll($ele) {
    var topo;
    topo = parseInt($ele.css("top"), 10);
    
    if (topo < -90) {
        topo = 156; // altura total
        $ele.css("top", topo);
    }

    $ele.animate({ 
        top: parseInt((topo)-156, 10) 
    },
        9000, //velocidade 
        'linear',
        function() {
            moverScroll($(this));
        }
    );
}

function moverScrollPrimonews($ele) {
    var topoPrimonews;
    topoPrimonews = parseInt($ele.css("top"), 10);
    
    if (topoPrimonews < -140) {
        topoPrimonews = 505;
        $ele.css("top", topoPrimonews);
    }

    $ele.animate({ 
        top: parseInt((topoPrimonews)-175, 10) 
    },
        6000, //velocidade 
        'linear',
        function() {
            moverScrollPrimonews($(this));
        }
    );
}