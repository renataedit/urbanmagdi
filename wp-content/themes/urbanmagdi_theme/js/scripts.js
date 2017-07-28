/**
 * Created by Lampyon-1 on 2017. 07. 17..
 */
$(document).ready(function(){
   console.log('hellóbelló');
});

jQuery(document).ready(function(){
    jQuery('.parallax[data-type="background"]').each(function(){
        var bgobj = jQuery(this);

        jQuery(window).scroll(function(){
            var yPos = -(jQuery(window).scrollTop() / bgobj.data('speed'));

            var coords = '50% ' + yPos + 'px';

            bgobj.css('background-position', coords);
        });
    });

    jQuery('.parallax[data-type="text"]').each(function(){
        var textobj = jQuery(this);
        var originalTop = textobj.position().top;

        jQuery(window).scroll(function(){
            var topPos = -((jQuery(window).scrollTop()) / textobj.data('speed'));

            var coords = topPos + originalTop + 'px';

            textobj.css('top', coords);
        });
    });
});