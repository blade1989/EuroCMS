/* Scroll to top */

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#goTop').stop().animate({
                top: '15%'
            }, 750);
        } else {
            $('#goTop').stop().animate({
                top: '-100px'
            }, 750);
        }
    });
    $('#goTop').click(function() {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 500, function() {
            $('#goTop').stop().animate({
                top: '-100px'
            }, 500);
        });
    });
});


// Fancybox

jQuery(document).ready(function($) {
    var select = $('a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]a[href$=".png"],a[href$=".svg"],a[href$=".SVG"]');
    select.attr('rel', 'fancybox');
    select.fancybox();
});

$(document).ready(function() {
    $(".fancybox").fancybox();
});


$(".fancybox").fancybox({
    beforeShow: function() {
        var alt = this.element.find('img').attr('alt');

        this.inner.find('img').attr('alt', alt);

        this.title = alt;
    }
});