$(document).ready(function() {
    // Home
    $('marquee').marquee();

    // Primonews
    var j = 0;
    $(".noticia-primonews").each(function() {
          var boxPrimonews;
          boxPrimonews = $(this);
          
          boxPrimonews.css("top", j);
          j += 165;
          moverScrollPrimonews(boxPrimonews);
    });

});


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